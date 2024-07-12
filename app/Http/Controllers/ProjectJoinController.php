<?php

namespace App\Http\Controllers;

use App\Http\Requests\ProjectJoinRequest;
use App\Http\Resources\ProjectJoinResource;
use App\Models\ProjectJoin;
use App\Models\ProjectMember;
use Illuminate\Http\Request;
use Illuminate\Support\Str;

class ProjectJoinController extends Controller
{
    public function store(ProjectJoinRequest $request, $projectId)
    {
        $request->validated();
        $projectJoinData = $request->all();
        $projectJoinData['project_id'] = $projectId;
        $projectJoinData['user_id'] = auth()->user()->id;
        do {
            $projectJoinData['id'] = 'project-join-'.Str::uuid();
        } while (ProjectJoin::where('id', $projectJoinData['id'])->exists());

        $projectJoin = ProjectJoin::create($projectJoinData);

        return $this->resStoreData($projectJoin);
    }

    public function showByProjectId($projectId)
    {
        $projectJoin = ProjectJoin::where('project_id', $projectId)->get();

        return ProjectJoinResource::collection($projectJoin);
    }

    public function reject($projectId, $userId)
    {
        $projectJoin = ProjectJoin::where('project_id', $projectId)->where('user_id', $userId)->first();
        if (! $projectJoin) {
            return $this->resDataNotFound('Project Join');
        }

        $projectJoin->delete();

        return response(['message' => 'Request Rejected'], 200);
    }

    public function accept($projectId, $userId)
    {
        $projectJoin = ProjectJoin::where('project_id', $projectId)->where('user_id', $userId)->first();
        if (! $projectJoin) {
            return $this->resDataNotFound('Project Join');
        }

        $projectMemberData = ['project_id' => $projectId, 'user_id' => $userId, 'expertise' => $projectJoin->expertise];
        do {
            $projectMemberData['id'] = 'project-member'.Str::uuid();
        } while (ProjectJoin::where('id', $projectMemberData['id'])->exists());

        $projectMember = ProjectMember::create($projectMemberData);
        $projectJoin->delete();

        return response(['message' => 'Request Accepted'], 200);
    }
}
