<?php

namespace App\Http\Resources;

use App\Models\like;
use App\Models\ProjectJoin;
use App\Models\ProjectMember;
use Illuminate\Http\Request;
use Illuminate\Http\Resources\Json\JsonResource;

class ProjectResource extends JsonResource
{
    /**
     * Transform the resource into an array.
     *
     * @return array<string, mixed>
     */
    public function toArray(Request $request): array
    {
        return [
            'id' => $this->id,
            'room_id' => $this->room_id,
            'owner' => $this->user->full_name,
            'owner_profile_picture' => $this->user->profile_picture,
            'owner_job' => $this->user->job,
            'title' => $this->title,
            'description' => $this->description,
            'max_participant' => $this->max_participant,
            'participant_count' => $this->projectMember->count(),
            'category' => $this->category,
            'image' => $this->image,
            'like_count' => Like::where('project_id', $this->id)->count(),
            'is_owner' => $this->user_id === auth()->user()->id,
            'is_paid' => $this->is_paid,
            'is_finish' => $this->is_finish,
            'is_joined' => ProjectJoin::where('project_id', $this->id)->where('user_id', auth()->user()->id)->exists(),
            'is_participant' => ProjectMember::where('project_id', $this->id)->where('user_id', auth()->user()->id)->exists(),
            'is_like' => Like::where('project_id', $this->id)->where('user_id', auth()->user()->id)->exists(),
            'participant' => ProjectMemberResource::collection($this->projectMember),
            'skill' => ProjectSkillResource::collection($this->projectSkill),
            'tool' => ProjectToolResource::collection($this->projectTool),
            'comment' => CommentResource::collection($this->comment),
        ];
    }
}
