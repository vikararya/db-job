<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class JobSeekerLookingForJob extends Model
{
    use HasFactory;
    protected $fillable = [
        'job_seeker_id',
        'profession_id',
        'Profession_detail_id'
    ];

    public function jobseeker()
    {
        return $this->belongsTo(JobSeeker::class, 'job_seeker_id');
    }

    public function profession()
    {
        return $this->belongsTo(Professions::class, 'profession_id');
    }

    public function professionDetail()
    {
        return $this->belongsTo(ProfessionDetail::class, 'Profession_detail_id');
    }
}
