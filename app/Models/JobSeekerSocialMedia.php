<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class JobSeekerSocialMedia extends Model
{
    use HasFactory;

    protected $fillable = [
        'job_seeker_id',
        'behance',
        'codepen',
        'facebook',
        'github',
        'instagram',
        'linkedin',
        'tiktok',
        'vimeo',
        'twitter',
        'youtube'
    ];

    public function jobseeker()
    {
        return $this->belongsTo(JobSeeker::class, 'job_seeker_id');
    }
}
