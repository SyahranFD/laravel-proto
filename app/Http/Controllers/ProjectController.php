<?php

namespace App\Http\Controllers;

use App\Http\Requests\ProjectJoinRequest;
use App\Http\Requests\ProjectRequest;
use App\Http\Requests\ProjectSkillRequest;
use App\Http\Resources\ProjectResource;
use App\Http\Resources\ProjectSkillResource;
use App\Models\Project;
use App\Models\ProjectJoin;
use App\Models\ProjectMember;
use App\Models\ProjectSkill;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Config;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Str;

class ProjectController extends Controller
{
    public function __construct()
    {
        $this->url = Config::get('url.hosting');
    }
    public function store(ProjectRequest $request)
    {
        $request->validated();
        $projectData = $request->all();
        do {
            $projectData['id'] = 'project-'.Str::uuid();
        } while (Project::where('id', $projectData['id'])->exists());
        do {
            $projectData['room_id'] = 'room-'.Str::uuid();
        } while (Project::where('room_id', $projectData['room_id'])->exists());

        $user = auth()->user();
        if (! $user) {
            return $this->resUserNotFound();
        }

        $projectData['user_id'] = $user->id;
        $project = Project::create($projectData);

        return $this->resStoreData($project);
    }

    public function storeSkill(ProjectSkillRequest $request, $projectId)
    {
        $request->validated();
        $projectSkillData = $request->all();
        $projectSkillData['project_id'] = $projectId;
        do {
            $projectSkillData['id'] = 'project-skill-'.Str::uuid();
        } while (ProjectSkill::where('id', $projectSkillData['id'])->exists());

        $projectSkill = ProjectSkill::create($projectSkillData);
        $projectSkill = new ProjectSkillResource($projectSkill);

        return $this->resStoreData($projectSkill);
    }

    public function index(Request $request)
    {
        $search = $request->query('search');
        $category = $request->query('category');
        $isFinish = $request->query('is_finish');
        $limit = $request->query('limit');

        $query = Project::query();

        if ($search) {
            $query->where('title', 'like', '%' . $search . '%');
        }

        if ($category) {
            $query->where('category', $category);
        }

        if ($isFinish === '0') {
            $query->where('is_finish', 0);
        } elseif ($isFinish === '1') {
            $query->where('is_finish', 1);
        }

        if ($limit) {
            $query->limit($limit);
        }

        $user = auth()->user();
        if ($user) {
            $query->where('user_id', '!=', $user->id);
        }

        $projectData = $query->get();

        return ProjectResource::collection($projectData);
    }

    public function showCurrent()
    {
        $user = auth()->user();
        if (! $user) {
            return $this->resUserNotFound();
        }

        $projectIds = ProjectMember::where('user_id', $user->id)->pluck('project_id');
        $projects = Project::where('user_id', $user->id)
            ->where('is_finish', true)
            ->orWhereIn('id', $projectIds)
            ->where('is_finish', true)
            ->get();

        return ProjectResource::collection($projects);
    }

    public function showCurrentOngoing()
    {
        $user = auth()->user();
        if (! $user) {
            return $this->resUserNotFound();
        }

        $projectIds = ProjectMember::where('user_id', $user->id)->pluck('project_id');
        $projects = Project::where('user_id', $user->id)
            ->where('is_finish', false)
            ->orWhereIn('id', $projectIds)
            ->where('is_finish', false)
            ->get();

        return ProjectResource::collection($projects);
    }

    public function showById($id)
    {
        $project = Project::find($id);
        if (! $project) {
            return $this->resDataNotFound('Project');
        }

        return new ProjectResource($project);
    }

    public function uploadImage(Request $request, $id)
    {
        $request->validate([ 'image' => 'required', ]);
        $project = Project::find($id);
        if (! $project) {
            return $this->resDataNotFound('Project');
        }

        $projectData = $request->all();
        if ($request->hasFile('image')) {
            $imagePath = $request->file('image')->store('public/project');
            $projectData['image'] = $this->url.Storage::url($imagePath);
        }

        $project->update($projectData);

        return $this->resUpdateData($project);
    }

    public function finish($id)
    {
        $project = Project::find($id);
        if (! $project) {
            return $this->resDataNotFound('Project');
        }

        $project->update(['is_finish' => true]);

        return $this->resUpdateData($project);
    }

    public function sendJoinRequest(ProjectJoinRequest $request, $projectId)
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
}
