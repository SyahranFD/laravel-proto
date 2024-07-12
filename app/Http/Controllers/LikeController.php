<?php

namespace App\Http\Controllers;

use App\Models\Like;
use Illuminate\Http\Request;
use Illuminate\Support\Str;

class LikeController extends Controller
{
    public function like($projectId)
    {
        $like = Like::where('project_id', $projectId)->where('user_id', auth()->user()->id)->exists();
        $likeData = [];

        if(! $like) {
            do {
                $likeData['id'] = 'like-'.Str::uuid();
            } while (Like::where('id', $likeData['id'])->exists());

            $user = auth()->user();
            if (! $user) {
                return $this->resUserNotFound();
            }

            $likeData['user_id'] = $user->id;
            $likeData['project_id'] = $projectId;
            Like::create($likeData);

            return response(['message' => 'Liked']);
        } else {
            Like::where('project_id', $projectId)->where('user_id', auth()->user()->id)->delete();
            return response(['message' => 'Unliked']);
        }
    }
}
