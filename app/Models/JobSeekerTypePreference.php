<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class JobSeekerTypePreference extends Model
{
    use HasFactory;
    protected $fillable = [
        'job_seeker_type_id',
        'job_type_id'
    ];

    public function jobseeker()
    {
        return $this->belongsTo(JobSeeker::class, 'job_seeker_type_id');
    }

    public function jobtype()
    {
        return $this->belongsTo(JobType::class, 'job_type_id');
    }
}
