<?php

namespace App\Http\Resources;

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
            'title' => $this->title,
            'description' => $this->description,
            'max_participant' => $this->max_participant,
            'category' => $this->category,
            'image' => $this->image,
            'is_owner' => $this->user_id === auth()->user()->id,
            'is_paid' => $this->is_paid,
            'is_finish' => $this->is_finish,
            'is_joined' => ProjectJoin::where('project_id', $this->id)->where('user_id', auth()->user()->id)->exists(),
            'participant' => ProjectMemberResource::collection($this->projectMember),
            'skill' => ProjectSkillResource::collection($this->projectSkill),
            'tool' => ProjectToolResource::collection($this->projectTool),
        ];
    }
}
