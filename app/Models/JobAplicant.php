<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class JobAplicant extends Model
{
    use HasFactory;
    protected $fillable = [
        'job_vacancy_id',
        'job_seeker_id',
        'date',
        'status',
    ];

    public function JobVacancie()
    {
        return $this->belongsTo(JobVacancie::class, 'job_vacancy_id');
    }


    public function jobVacancieBenefit()
    {
        return $this->belongsTo(JobVacancyBenefit::class, 'job_vacancy_id');
    }
}
