<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class EmployerSocialMedia extends Model
{
    use HasFactory;

    protected $fillable = [
        'employer_id',
        'website',
        'facebook',
        'instagram',
        'linkedin',
        'twitter',
        'youtube',
    ];

    public function employer()
    {
        return $this->belongsTo(Employer::class, 'employer_id');
    }
}
