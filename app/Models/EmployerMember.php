<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class EmployerMember extends Model
{
    use HasFactory;

    protected $fillable = [
        'employer_id',
        'user_id',
        'first_name',
        'last_name',
        'phone',
    ];

    public function employer()
    {
        return $this->belongsTo(Employer::class, 'employer_id');
    }

    public function user()
    {
        return $this->hasMany(User::class, 'user_id');
    }
}
