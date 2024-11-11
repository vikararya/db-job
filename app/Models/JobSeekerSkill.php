<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class JobSeekerSkill extends Model
{
    use HasFactory;
    protected $fillable = [
        'job_seeker_id',
        'skill_id',
    ];


    public function jobseeker()
    {
        return $this->belongsTo(JobSeeker::class, 'job_seeker_id');
    }

    public function skill()
    {
        return $this->belongsTo(Skill::class, 'skill_id');
    }
}
