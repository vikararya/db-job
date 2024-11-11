<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ProfessionDetail extends Model
{
    use HasFactory;

    protected $fillable = ['profession_id', 'name'];
    public function profession()
    {
        return $this->belongsTo(Professions::class, 'profession_id');
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
