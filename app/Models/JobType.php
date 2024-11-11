<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class JobType extends Model
{
    use HasFactory;

    protected $fillable = [
        'name'
    ];

    public function JobSeekerTypePreference()
    {
        return $this->hasMany(JobSeekerTypePreference::class);
    }
    public function jobVacancie()
    {
        return $this->hasMany(JobVacancie::class);
    }
}
