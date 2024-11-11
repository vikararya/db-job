<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class JobVacancyBenefit extends Model
{
    use HasFactory;
    protected $fillable = [
        'job_vacancy_id',
        'name',
        'icon',
        'description',
    ];

    public function JobVacancie()
    {
        return $this->belongsTo(JobVacancie::class, 'job_vacancy_id');
    }

    public function jobApplicant()
    {
        return $this->hasMany(JobAplicant::class);
    }
}
