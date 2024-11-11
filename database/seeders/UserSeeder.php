<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\User;
use Spatie\Permission\Models\Role;
use Illuminate\Support\Facades\Hash;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        // Membuat role
        $administratorRole = Role::create(['name' => 'administrator']);
        $adminRole = Role::create(['name' => 'admin']);
        $administrator_employersRole = Role::create(['name' => 'administrator_employers']);
        $recruiter_employersRole = Role::create(['name' => 'recruiter_employers']);
        $job_seekersRole = Role::create(['name' => 'job_seekers']);

        $administrator = User::create([
            'name' => 'Administrator User',
            'email' => 'administrator@example.com',
            'password' => Hash::make('password'),
        ]);
        $administrator->assignRole($administratorRole);

        $admin = User::create([
            'name' => 'Admin User',
            'email' => 'admin@example.com',
            'password' => Hash::make('password'),
        ]);
        $admin->assignRole($adminRole);

        $administrator_employers = User::create([
            'name' => 'administrator employers User',
            'email' => 'administrator_employers@example.com',
            'password' => Hash::make('password'),
        ]);
        $administrator_employers->assignRole($administrator_employersRole);

        $recruiter_employers = User::create([
            'name' => 'recruiter employers User',
            'email' => 'recruiter_employers@example.com',
            'password' => Hash::make('password'),
        ]);
        $recruiter_employers->assignRole($recruiter_employersRole);

        $job_seekers = User::create([
            'name' => 'job seeker User',
            'email' => 'job_seeker@example.com',
            'password' => Hash::make('password'),
        ]);
        $job_seekers->assignRole($job_seekersRole);
    }
}
