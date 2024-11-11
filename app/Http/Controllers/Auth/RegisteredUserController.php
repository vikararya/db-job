<?php

namespace App\Http\Controllers\Auth;

use App\Models\User;
use App\Models\JobSeeker;
use Illuminate\View\View;
use Illuminate\Http\Request;
use Illuminate\Validation\Rules;
use Illuminate\Support\Facades\DB;
use Spatie\Permission\Models\Role;
use Illuminate\Support\Facades\Log;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Illuminate\Http\RedirectResponse;
use Illuminate\Auth\Events\Registered;
use Illuminate\Support\Facades\Redirect;


class RegisteredUserController extends Controller
{
    /**
     * Display the registration view.
     */
    public function create(): View
    {
        return view('auth.register');
    }

    /**
     * Handle an incoming registration request.
     *
     * @throws \Illuminate\Validation\ValidationException
     */
    public function store(Request $request): RedirectResponse
    {
        $request->validate([
            'name' => ['required', 'string', 'max:255'],
            'email' => ['required', 'string', 'lowercase', 'email', 'max:255', 'unique:' . User::class],
            'password' => ['required', 'confirmed', Rules\Password::defaults()],
        ]);

        $user = User::create([
            'name' => $request->name,
            'email' => $request->email,
            'password' => Hash::make($request->password),
        ]);

        $role = Role::where('name', 'administrator')->first();

        $user->assignRole($role);

        event(new Registered($user));

        Auth::login($user);

        return redirect(route('dashboard', absolute: false))->with('success', 'Resgistration Successful');
    }

    public function Pekerja(): View
    {
        return view('Backend.autentikasi.register');
    }

    public function registerPekerja(Request $request): RedirectResponse
    {
        DB::beginTransaction();

        try {
            $request->validate([
                'firstname' => 'required|string|max:255',
                'lastname' => 'required|string|max:255',
                'email' => 'required|string|email|max:255|unique:users,email',
                'phone' => 'required|string|max:15|unique:job_seekers,phone',
                'password' => 'required|confirmed|min:8',
            ]);

            // Create User
            $user = User::create([
                'name' => $request->firstname,
                'email' => $request->email,
                'password' => Hash::make($request->password),
            ]);

            // Create JobSeeker
            JobSeeker::create([
                'user_id' => $user->id,
                'first_name' => $request->firstname,
                'last_name' => $request->lastname,
                'email' => $request->email,
                'phone' => $request->phone,
            ]);

            // Assign Role
            $user->assignRole('job_seekers');

            DB::commit();
            Auth::login($user);
            return redirect()->route('daftar-lanjutan')
                ->with('success', 'Basic registration successful, please complete the next steps.');
        } catch (\Exception $e) {
            DB::rollback();
            return back()->withErrors(['error' => $e->getMessage()]);
        }
    }


    public function registerJobSeeker(Request $request)
    {
        $request->validate([
            'province' => 'required|string|max:255',
            'city' => 'required|string|max:255',
            'address' => 'required|string|max:255',
            'looking_for_jobs' => 'required|array',
            'job_type' => 'required|string',
            'willing_remote' => 'boolean',
        ]);

        // Fetch the authenticated user (who is a job seeker)
        $jobSeeker = JobSeeker::where('user_id', auth()->user()->id)->firstOrFail();

        // Update job seeker data
        $jobSeeker->update([
            'province' => $request->province,
            'city' => $request->city,
            'address' => $request->address,
            'looking_for_jobs' => json_encode($request->looking_for_jobs),
            'job_type' => $request->job_type,
            'willing_remote' => $request->willing_remote,
        ]);

        return redirect()->route('landing-jobSeeker')->with('success', 'Registration successful');
    }
}
