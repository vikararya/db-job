<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class IndonesiaCities extends Model
{
    use HasFactory;
    protected $fillable = [
        'code',
        'province_code',
        'name',
        'meta'
    ];

    public function province()
    {
        return $this->belongsTo(IndonesiaProvincie::class, 'province_code');
    }

    public function JobSeekerCityPreference()
    {
        return $this->hasMany(JobSeekerCityPreference::class, 'city_id');
    }

    public function employers()
    {
        return $this->hasMany(Employer::class);
    }

    public function jobVacancie()
    {
        return $this->hasMany(JobVacancie::class);
    }
}
