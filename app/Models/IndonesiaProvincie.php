<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class IndonesiaProvincie extends Model
{
    use HasFactory;
    protected $fillable = [
        'code',
        'name',
        'meta'
    ];

    public function city()
    {
        return $this->hasMany(IndonesiaCities::class, 'province_id');
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
