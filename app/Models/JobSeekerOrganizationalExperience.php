<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class JobSeekerOrganizationalExperience extends Model
{
    use HasFactory;

    protected $fillable = [
        'job_seeker_id',
        'name',
        'position',
        'year',
        'month_start',
        'year_start',
        'year_end',
        'month_end',
        'still_volunteer',
        'description',
    ];


    public function JobSeeker()
    {
        return $this->belongsTo(JobSeeker::class, 'job_seeker_id');
    }
}
