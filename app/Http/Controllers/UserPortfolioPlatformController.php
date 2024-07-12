<?php

namespace App\Http\Controllers;

use App\Http\Requests\UserPortfolioPlatformRequest;
use App\Http\Resources\UserPortfolioPlatformResource;
use App\Models\UserPortfolioPlatform;
use Illuminate\Http\Request;
use Illuminate\Support\Str;

class UserPortfolioPlatformController extends Controller
{
    public function store(UserPortfolioPlatformRequest $request)
    {
        $request->validated();
        $portfolioData = $request->all();
        $portfolioData['id'] = 'portfolio-'.Str::uuid();

        $user = auth()->user();
        if (! $user) {
            return $this->resUserNotFound();
        }
        $portfolioData['user_id'] = $user->id;

        $portfolio = UserPortfolioPlatform::create($portfolioData);
        $portfolio = new UserPortfolioPlatformResource($portfolio);

        return $this->resStoreData($portfolio);
    }

    public function delete($id)
    {
        $portfolio = UserPortfolioPlatform::find($id);
        if (! $portfolio) {
            return $this->resDataNotFound('User Portfolio Platform');
        }

        $portfolio->delete();

        return $this->resDataDeleted('User Portfolio Platform');
    }
}
