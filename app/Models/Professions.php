<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Professions extends Model
{
    use HasFactory;

    protected $fillable = ['name'];

    public function details()
    {
        return $this->hasMany(ProfessionDetail::class, 'profession_id');
    }
    public function jobSeekersLookingForJob()
    {
        return $this->hasMany(JobSeekerLookingForJob::class);
    }
    public function jobVacancie()
    {
        return $this->hasMany(JobVacancie::class);
    }
}
