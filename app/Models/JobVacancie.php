<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class JobVacancie extends Model
{
    use HasFactory;
    protected $fillable = [
        'name',
        'profession_id',
        'profession_detail_id',
        'job_type_id',
        'work_system_id',
        'province_id',
        'city_id',
        'salary_min',
        'salary_max',
        'show_salary',
        'salary_bonus',
        'salary_bonus_min',
        'salary_bonus_max',
        'salary_bonus_period',
        'gender',
        'no_age_limit',
        'age_min',
        'age_max',
        'education_id',
        'work_experience_requirement_id',
        'status',
        'process_interview',
        'employers_id',
    ];


    public function profession()
    {
        return $this->belongsTo(Professions::class, 'profession_id');
    }
    public function professionDetail()
    {
        return $this->belongsTo(ProfessionDetail::class, 'profession_detail_id]');
    }
    public function jobType()
    {
        return $this->belongsTo(JobType::class, 'job_type_id');
    }
    public function workSystem()
    {
        return $this->belongsTo(WorkSystem::class, 'work_system_id');
    }
    public function province()
    {
        return $this->belongsTo(IndonesiaProvincie::class, 'province_id');
    }
    public function city()
    {
        return $this->belongsTo(IndonesiaCities::class, 'city_id');
    }
    public function education()
    {
        return $this->belongsTo(Education::class, 'education_id');
    }
    public function workExperienceRequirement()
    {
        return $this->belongsTo(WorkExperience::class, 'work_experience_requirement_id');
    }
    public function employers()
    {
        return $this->belongsTo(Employer::class, 'employers_id');
    }

    public function jobVacancieBenefit()
    {
        return $this->hasMany(JobVacancyBenefit::class);
    }

    public function jobApplicant()
    {
        return $this->hasMany(JobAplicant::class);
    }
}
