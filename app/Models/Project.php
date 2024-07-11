<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Project extends Model
{
    use HasFactory;

    public $incrementing = false;
    protected $guarded = [];
    protected $casts = [
        'max_participant' => 'integer',
        'is_paid' => 'boolean',
        'is_finish' => 'boolean',
    ];

    public function user()
    {
        return $this->belongsTo(User::class);
    }

    public function projectSkill()
    {
        return $this->hasMany(ProjectSkill::class);
    }

    public function projectMember()
    {
        return $this->hasMany(ProjectMember::class);
    }

    public function projectJoin()
    {
        return $this->hasMany(ProjectJoin::class);
    }

    public function projectTool()
    {
        return $this->hasMany(ProjectTool::class);
    }
}
