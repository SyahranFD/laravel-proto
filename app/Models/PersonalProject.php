<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class PersonalProject extends Model
{
    use HasFactory;

    public $incrementing = false;
    protected $guarded = [];

    public function user()
    {
        return $this->belongsTo(User::class);
    }

    public function personalProjectSkill()
    {
        return $this->hasMany(PersonalProjectSkill::class);
    }
}
