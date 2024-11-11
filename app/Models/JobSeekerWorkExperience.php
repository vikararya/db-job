<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class JobSeekerWorkExperience extends Model
{
    use HasFactory;
    protected $fillable = [
        'job_seeker_id',
        'position',
        'company_name',
        'month_start',
        'year_start',
        'still_working',
        'month_end',
        'year_end',
    ];

    public function jobseeker()
    {
        return $this->belongsTo(JobSeeker::class, 'job_seeker_id');
    }
}
