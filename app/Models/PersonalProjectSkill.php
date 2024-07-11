<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class PersonalProjectSkill extends Model
{
    use HasFactory;

    public $incrementing = false;
    protected $guarded = [];

    public function personalProject()
    {
        return $this->belongsTo(PersonalProject::class);
    }
}
