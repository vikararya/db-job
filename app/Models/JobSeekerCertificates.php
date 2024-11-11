<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class JobSeekerCertificates extends Model
{
    use HasFactory;
    protected $fillable = [
        'job_seeker_id',
        'title',
        'achievement',
        'year',
        'month_start',
        'year_start',
        'year_end',
        'month_end',
        'without_active_period',
        'description',
    ];

    public function jobseeker()
    {
        return $this->belongsTo(JobSeeker::class, 'job_seeker_id');
    }
}
