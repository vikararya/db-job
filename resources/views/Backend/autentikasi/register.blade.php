@extends('layout.master2')
{{-- register pekerja --}}

@section('content')
<div class="page-content d-flex align-items-center justify-content-center">
       <!-- Success Message -->
       @if(session('success'))
       <div class="alert alert-success">
           {{ session('success') }}
       </div>
   @endif
   
   <!-- Error Message -->
   @if($errors->any())
       <div class="alert alert-danger">
           <ul>
               @foreach($errors->all() as $error)
                   <li>{{ $error }}</li>
               @endforeach
           </ul>
       </div>
   @endif

   <div class="container mx-auto p-20 transform scale-90">

    <div class="grid grid-cols-1 md:grid-cols-2 gap-8">

      <div class="bg-green-500 rounded-lg p-4 relative overflow-hidden" style="background-image: url({{asset('assets/images/Gambar.png')}}); background-size: cover; background-position: center;"> 

        <div class="text-white text-center">

            <img src="{{asset('assets/images/logo.png')}}" alt="DBJob Logo" class="w-24 mb-30">
  
  
          </div>

      </div>

      <div class="bg-white rounded-lg p-8 shadow-md">

        <h2 class="text-3xl font-bold mb-8 text-green-500 d-block mb-2">DB<span>Jobs</span></h2>
        <h2 class="text-3xl font-bold mb-8 text-green-500">Create Account</h2>
        <h5 class="text-muted fw-normal mb-4">Selamat Datang! Silahkan mendaftarkan akun kamu.</h5>
        <form method="POST" action="{{ route('store_pekerja') }}">
          @csrf
          <div class="row">
            <div class="col-sm-6">
              <div class="mb-3">
                <label class="form-label">First Name</label>
                <input type="text" class="form-control" id="firstname" name="firstname" placeholder="Enter first name">
              </div>
            </div>
            <div class="col-sm-6">
              <div class="mb-3">
                <label class="form-label">Last Name</label>
                <input type="text" class="form-control" id="lastname" name="lastname" placeholder="Enter last name">
              </div>
            </div>
          </div>
          <div class="mb-3">
              <label for="userEmail" class="form-label">Email address</label>
              <input type="email" class="form-control" id="userEmail" name="email" placeholder="Email">
          </div>
          <div class="mb-3">
            <label for="Phone" class="form-label">Phone</label>
            <input type="phone" class="form-control" id="Phone" name="phone" placeholder="Phone">
        </div>
          <div class="mb-3">
              <label for="userPassword" class="form-label">Password</label>
              <input type="password" class="form-control" id="userPassword" name="password" autocomplete="current-password" placeholder="Password">
          </div>
          <div class="mb-3">
              <label for="password_confirmation" class="form-label">Confirm Password</label>
              <input type="password" class="form-control" id="password_confirmation" name="password_confirmation" autocomplete="current-password" placeholder="Confirm Password">
          </div>
          <div class="form-check mb-3">
              <input type="checkbox" class="form-check-input" id="authCheck">
              <label class="form-check-label" for="authCheck">
                  Remember me
              </label>
          </div>
          <div>
              <button class="btn btn-success" type="submit">Sign Up</button>
          </div>
          <a href="{{ route('login') }}" class="d-block mt-3 text-muted">Apakah kamu sudah memiliki akun? Sign in</a>
      </form>  

      </div>
    </div>
  </div>
</div>
@endsection