<?php

namespace App\Http\Controllers;

use App\Http\Requests\CommentRequest;
use App\Models\Comment;
use Illuminate\Http\Request;
use Illuminate\Support\Str;

class CommentController extends Controller
{
    public function store(CommentRequest $request, $projectId)
    {
        $request->validated();
        $commentData = $request->all();
        do {
            $commentData['id'] = 'comment-'.Str::uuid();
        } while (Comment::where('id', $commentData['id'])->exists());

        $user = auth()->user();
        if (! $user) {
            return $this->resUserNotFound();
        }

        $commentData['user_id'] = $user->id;
        $commentData['project_id'] = $projectId;
        $comment = Comment::create($commentData);

        return $this->resStoreData($comment);
    }
}
