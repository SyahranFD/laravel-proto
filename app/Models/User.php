<?php

namespace App\Models;

// use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;
use Laravel\Sanctum\HasApiTokens;

class User extends Authenticatable
{
    use HasApiTokens, HasFactory, Notifiable;

    public $incrementing = false;
    protected $guarded = [];
    protected $hidden = [
        'password',
    ];

    public function project()
    {
        return $this->hasMany(Project::class);
    }

    public function projectMember()
    {
        return $this->hasMany(ProjectMember::class);
    }

    public function projectJoin()
    {
        return $this->hasMany(ProjectJoin::class);
    }

    public function userExpertise()
    {
        return $this->hasMany(UserExpertise::class);
    }

    public function userPortfolioPlatform()
    {
        return $this->hasMany(UserPortfolioPlatform::class);
    }

    public function personalProject()
    {
        return $this->hasMany(PersonalProject::class);
    }

    public function comment()
    {
        return $this->hasMany(Comment::class);
    }

    public function like()
    {
        return $this->hasMany(Like::class);
    }
}
