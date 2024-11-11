<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Employer extends Model
{
    use HasFactory;
    protected $fillable = [
        'name',
        'email',
        'phone',
        'logo',
        'description',
        'slogan',
        'province_id',
        'city_id',
        'address',
        'number_of_employee_id',
        'npwp',
        'nib',
        'status',
        'industry_id',
    ];

    public function province()
    {
        return $this->belongsTo(IndonesiaProvincie::class, 'province_id');
    }

    public function city()
    {
        return $this->belongsTo(IndonesiaCities::class, 'city_id');
    }

    public function numberEmployee()
    {
        return $this->belongsTo(NumberOfEmployee::class, 'number_of_employee_id');
    }

    public function industry()
    {
        return $this->belongsTo(Industrie::class, 'industry_id');
    }

    public function employerMember()
    {
        return $this->hasMany(EmployerMember::class);
    }

    public function employerSocial()
    {
        return $this->hasMany(EmployerSocialMedia::class);
    }

    public function employergallerie()
    {
        return $this->hasMany(EmployerGallerie::class);
    }

    public function jobVacancie()
    {
        return $this->hasMany(JobVacancie::class);
    }
}
