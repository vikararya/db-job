<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class JobSeekerEducationalBackground extends Model
{
    use HasFactory;
    protected $fillable = [
        'job_seeker_id',
        'education_id',
        'educational_institutions',
        'program_study',
        'month_start',
        'year_start',
        'still_sstudying',
        'year_end',
        'month_end',
    ];


    public function JobSeeker()
    {
        return $this->belongsTo(JobSeeker::class, 'job_seeker_id');
    }

    public function education()
    {
        return $this->belongsTo(Education::class, 'education_id');
    }
}
