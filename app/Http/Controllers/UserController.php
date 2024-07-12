<?php

namespace App\Http\Controllers;

use App\Http\Requests\LoginRequest;
use App\Http\Requests\UserPortfolioPlatformRequest;
use App\Http\Requests\RegisterRequest;
use App\Http\Requests\UserUpdateRequest;
use App\Http\Resources\UserPortfolioPlatformResource;
use App\Http\Resources\UserResource;
use App\Models\User;
use App\Models\UserPortfolioPlatform;
use Illuminate\Support\Facades\Config;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Str;

class UserController extends Controller
{
    public function __construct()
    {
        $this->url = Config::get('url.hosting');
    }
    public function register(RegisterRequest $request)
    {
        $request->validated();
        $userData = $request->all();
        $userData['password'] = Hash::make($request->password);
        do {
            $userData['id'] = 'user-'.Str::uuid();
        } while (User::where('id', $userData['id'])->exists());

        $nameParts = explode(' ', $request->full_name);
        $firstName = $nameParts[0];
        $lastName = $nameParts[1] ?? '';
        $background = dechex(mt_rand(0, 0xFFFFFF));
        $userData['profile_picture'] = 'https://ui-avatars.com/api/?name='.urlencode($firstName.' '.$lastName).'&color=FFFFF'.'&background='.$background.'&size=128';

        $user = User::create($userData);
        $user = new UserResource($user);
        $token = $user->createToken('fun-education')->plainTextToken;

        return response([
            'data' => $user,
            'token' => $token,
        ], 201);
    }

    public function login(LoginRequest $request)
    {
        $request->validated();

        $user = User::where('email', $request->email)->first();

        if (! $user || ! Hash::check($request->password, $user->password)) {
            return $this->resInvalidLogin();
        }

        $user = new UserResource($user);
        $token = $user->createToken('fun-education')->plainTextToken;

        return response([
            'data' => $user,
            'token' => $token,
        ], 200);
    }

    public function storePortfolio(UserPortfolioPlatformRequest $request)
    {
        $request->validated();
        $portofolioData = $request->all();
        $portofolioData['id'] = 'portofolio-'.Str::uuid();

        $user = auth()->user();
        if (! $user) {
            return $this->resUserNotFound();
        }
        $portofolioData['user_id'] = $user->id;

        $portofolio = UserPortfolioPlatform::create($portofolioData);
        $portofolio = new UserPortfolioPlatformResource($portofolio);

        return $this->resStoreData($portofolio);
    }

    public function showCurrent()
    {
        $user = auth()->user();
        if (! $user) {
            return $this->resUserNotFound();
        }

        return new UserResource($user);
    }

    public function update(UserUpdateRequest $request)
    {
        $request->validated();

        $user = auth()->user();
        if (! $user) {
            return $this->resUserNotFound();
        }

        $userData = $request->all();
        if ($request->hasFile('profile_picture')) {
            $imagePath = $request->file('profile_picture')->store('public/profile_picture');
            $userData['profile_picture'] = $this->url.Storage::url($imagePath);
        }

        if ($request->hasFile('profile_background')) {
            $imagePath = $request->file('profile_background')->store('public/profile_background');
            $userData['profile_background'] = $this->url.Storage::url($imagePath);
        }

        $user->update($userData);

        return $this->resUpdateData($user);
    }

    public function logout()
    {
        auth()->user()->tokens()->delete();

        return response(['message' => 'Logged Out'], 200);
    }
}
