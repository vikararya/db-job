<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class JobSeekerCityPreference extends Model
{
    use HasFactory;
    protected $fillable = [
        'job_seeker_id',
        'city_id'
    ];

    public function jobseeker()
    {
        return $this->belongsTo(JobSeeker::class, 'job_seeker_id');
    }

    public function city()
    {
        return $this->belongsTo(IndonesiaCities::class, 'city_id');
    }
}
