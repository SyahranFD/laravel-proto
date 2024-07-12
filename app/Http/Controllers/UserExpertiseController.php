<?php

namespace App\Http\Controllers;

use App\Http\Requests\UserExpertiseRequest;
use App\Models\UserExpertise;
use Illuminate\Http\Request;
use Illuminate\Support\Str;

class UserExpertiseController extends Controller
{
    public function store(UserExpertiseRequest $request)
    {
        $request->validated();
        $userExpertiseData = $request->all();
        do {
            $userExpertiseData['id'] = 'user-expertise-'.Str::uuid();
        } while (UserExpertise::where('id', $userExpertiseData['id'])->exists());

        $user = auth()->user();
        if (! $user) {
            return $this->resUserNotFound();
        }

        $userExpertiseData['user_id'] = $user->id;
        $userExpertise = UserExpertise::create($userExpertiseData);

        return $this->resStoreData($userExpertise);
    }

    public function delete($id)
    {
        $userExpertise = UserExpertise::find($id);
        if (! $userExpertise) {
            return $this->resDataNotFound('User Expertise');
        }

        $userExpertise->delete();

        return $this->resDataDeleted('User Expertise');
    }
}
