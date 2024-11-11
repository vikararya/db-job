<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class JobSeekerAwards extends Model
{
    use HasFactory;

    protected $fillable = [
        'job_seeker_id',
        'title',
        'achievement',
        'year',
        'description'
    ];

    public function jobseeker()
    {
        return $this->belongsTo(JobSeeker::class, 'job_seeker_id');
    }
}
