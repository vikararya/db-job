<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Industrie extends Model
{
    use HasFactory;
    protected $fillable = [
        'name'
    ];


    public function employers()
    {
        return $this->hasMany(Employer::class);
    }
}
