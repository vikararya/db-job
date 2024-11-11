<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class JobSeeker extends Model
{
    use HasFactory;

    protected $fillable = [
        'user_id',
        'first_name',
        'last_name',
        'email',
        'province',
        'city',
        'address',
        'phone',
        'looking_for_jobs',
        'job_type',
        'willing_remote',
        'resume',
        'portofolio_link',
        'portofolio',
        'gender',
        'birth_date',
        'birth_place',
        'description',
    ];

    // Relasi ke model User
    public function user()
    {
        return $this->belongsTo(User::class);
    }

    public function lookingForJobs()
    {
        return $this->hasMany(JobSeekerLookingForJob::class);
    }

    public function JobSeekerTypePreference()
    {
        return $this->hasMany(JobSeekerTypePreference::class);
    }

    public function JobSeekerCityPreference()
    {
        return $this->hasMany(JobSeekerCityPreference::class);
    }

    public function JobSeekerSkill()
    {
        return $this->hasMany(JobSeekerSkill::class);
    }

    public function JobSeekerWorkExperience()
    {
        return $this->hasMany(JobSeekerWorkExperience::class, 'job_seeker_id');
    }

    public function JobSeekerEducationalBackground()
    {
        return $this->hasMany(JobSeekerEducationalBackground::class, 'job_seeker_id');
    }

    public function JobSeekerSocialMedia()
    {
        return $this->hasMany(JobSeekerSocialMedia::class);
    }

    public function JobSeekerAwards()
    {
        return $this->hasMany(JobSeekerAwards::class);
    }

    public function JobSeekerCertificates()
    {
        return $this->hasMany(JobSeekerCertificates::class);
    }

    public function JobSeekerOrganizationalExperience()
    {
        return $this->hasMany(JobSeekerOrganizationalExperience::class);
    }
}
