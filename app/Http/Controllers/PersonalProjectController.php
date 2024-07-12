<?php

namespace App\Http\Controllers;

use App\Http\Requests\PersonalProjectRequest;
use App\Http\Requests\PersonalProjectSkillRequest;
use App\Http\Resources\PersonalProjectResource;
use App\Http\Resources\PersonalProjectSkillResource;
use App\Http\Resources\ProjectResource;
use App\Models\PersonalProject;
use App\Models\PersonalProjectSkill;
use App\Models\Project;
use App\Models\ProjectMember;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Config;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Str;

class PersonalProjectController extends Controller
{
    public function __construct()
    {
        $this->url = Config::get('url.localhost');
    }
    public function store(PersonalProjectRequest $request)
    {
        $request->validated();
        $personalProjectData = $request->all();
        do {
            $personalProjectData['id'] = 'personalProject-'.Str::uuid();
        } while (PersonalProject::where('id', $personalProjectData['id'])->exists());

        $user = auth()->user();
        if (! $user) {
            return $this->resUserNotFound();
        }

        if ($request->hasFile('image')) {
            $imagePath = $request->file('image')->store('public/personal-project');
            $personalProjectData['image'] = $this->url.Storage::url($imagePath);
        }

        $personalProjectData['user_id'] = $user->id;
        $personalProject = PersonalProject::create($personalProjectData);

        return $this->resStoreData($personalProject);
    }

    public function storeSkill(PersonalProjectSkillRequest $request, $personalProjectId)
    {
        $request->validated();
        $personalProjectSkillData = $request->all();
        $personalProjectSkillData['personal_project_id'] = $personalProjectId;
        do {
            $personalProjectSkillData['id'] = 'personalProject-skill-'.Str::uuid();
        } while (PersonalProjectSkill::where('id', $personalProjectSkillData['id'])->exists());

        $personalProjectSkill = PersonalProjectSkill::create($personalProjectSkillData);

        return $this->resStoreData($personalProjectSkill);
    }

    public function showCurrent()
    {
        $personalProject = auth()->user()->personalProject;
        if (! $personalProject) {
            return $this->resDataNotFound('Personal Project');
        }

        return PersonalProjectResource::collection($personalProject);
    }

    public function showById($id)
    {
        $personalProject = PersonalProject::find($id);
        if (! $personalProject) {
            return $this->resDataNotFound('Personal Project');
        }

        return new PersonalProjectResource($personalProject);
    }
}
