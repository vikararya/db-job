@extends('layout.master2')

@section('content')
<div class="container">
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

    <form method="POST" action="{{ route('job_seeker_register') }}" id="jobSeekerForm">
        @csrf

        <!-- Step 1: Province, City, Address -->
        <div id="step-1" class="step">
            <h3>Step 1: Location</h3>
            <div class="mb-3">
                <label for="province" class="form-label">Province</label>
                <input type="text" class="form-control" id="province" name="province" placeholder="Enter province">
            </div>

            <div class="mb-3">
                <label for="city" class="form-label">City</label>
                <input type="text" class="form-control" id="city" name="city" placeholder="Enter city">
            </div>

            <div class="mb-3">
                <label for="address" class="form-label">Address</label>
                <input type="text" class="form-control" id="address" name="address" placeholder="Enter address">
            </div>

            <button type="button" class="btn btn-primary" id="nextStep1">Next</button>
        </div>

        <!-- Step 2: Looking for Jobs, Job Type, Remote -->
        <div id="step-2" class="step" style="display: none;">
            <h3>Step 2: Job Preferences</h3>
            <div class="mb-3">
                <label for="looking_for_jobs" class="form-label">Looking for Jobs</label>
                <select multiple class="form-control" id="looking_for_jobs" name="looking_for_jobs[]">
                    <option value="1">Software Engineer</option>
                    <option value="2">Designer</option>
                    <option value="3">Data Analyst</option>
                    <!-- Add more job options from the "profesi" table -->
                </select>
            </div>

            <div class="mb-3">
                <label for="job_type" class="form-label">Job Type</label>
                <select class="form-control" id="job_type" name="job_type">
                    <option value="magang">Magang</option>
                    <option value="fulltime">Full-time</option>
                    <option value="parttime">Part-time</option>
                </select>
            </div>

            <div class="form-check mb-3">
              <input type="hidden" name="willing_remote" value="0">
              <input class="form-check-input" type="checkbox" id="willing_remote" name="willing_remote" value="1">
              <label class="form-check-label" for="willing_remote">
                  Willing to Work Remote
              </label>
          </div>
          

            <button type="button" class="btn btn-secondary" id="prevStep2">Back</button>
            <button type="submit" class="btn btn-primary">Submit</button>
        </div>
    </form>
</div>

@push('plugin-scripts')
<script>
    document.getElementById('nextStep1').addEventListener('click', function() {
        document.getElementById('step-1').style.display = 'none';
        document.getElementById('step-2').style.display = 'block';
    });

    document.getElementById('prevStep2').addEventListener('click', function() {
        document.getElementById('step-2').style.display = 'none';
        document.getElementById('step-1').style.display = 'block';
    });
</script>
@endpush

@endsection
