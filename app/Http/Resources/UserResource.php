<?php

namespace App\Http\Resources;

use Illuminate\Http\Request;
use Illuminate\Http\Resources\Json\JsonResource;

class UserResource extends JsonResource
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
            'full_name' => $this->full_name,
            'email' => $this->email,
            'password' => $this->password,
            'age' => $this->age,
            'job' => $this->job,
            'profile_picture' => $this->profile_picture,
            'profile_background' => $this->profile_background,
            'expertise' => UserExpertiseResource::collection($this->userExpertise),
            'portfolio_platform' => UserPortfolioPlatformResource::collection($this->userPortfolioPlatform),
        ];
    }
}
