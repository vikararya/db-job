<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Education extends Model
{
    use HasFactory;

    protected $fillable = [
        'name'
    ];


    public function jobseekereducation()
    {
        return $this->hasMany(JobSeekerEducationalBackground::class, 'education_id');
    }

    public function jobVacancie()
    {
        return $this->hasMany(JobVacancie::class);
    }
}
