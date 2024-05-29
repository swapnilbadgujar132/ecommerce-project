@extends('layouts.login')
@section('login_form')

<form action="{{route('login.store')}}" method="post">
    <!-- 2 column grid layout with text inputs for the first and last names -->
     @csrf
    <div class="row">
      <div class="col-md-6 mb-4">
        <div class="form-outline">
          <input type="text" value="{{old('first_name')}}" class="form-control @error('first_name') is-invalid @enderror"  name="first_name" required placeholder="First Name" id="form3Example1" class="form-control" />
          <span class="text-danger">
            @error('first_name')
            {{$message}}
          @enderror</span>
        </div>  
      </div>
      
      <div class="col-md-6 mb-4">
        <div class="form-outline">
          <input type="text" value="{{old('last_name')}}" class="form-control @error('last_name') is-invalid @enderror"  name="last_name"  placeholder="Last name"  id="form3Example2" class="form-control" />
          <span class="text-danger">
            @error('last_name')
              {{$message}}
            @enderror
          </span>
        </div>
      </div>
    </div>

    <!-- Email input -->
    <div class="form-outline mb-4">
      <input type="email" value="{{old('email')}}" class="form-control @error('email') is-invalid @enderror" name="email"  placeholder="Email address" id="form3Example3" class="form-control" />
      <span class="text-danger">
        @error('email')
          {{$message}}
        @enderror
      </span>
    </div>

    <!-- mobile input -->
    <div class="form-outline mb-4">
      <input type="text" value="{{old('mobile')}}" class=" form-control @error('mobile') is-invalid @enderror" name="mobile"  placeholder="Mobile Number" id="form3Example3" class="form-control" pattern="[0-9]*" maxlength="10"  oninput="this.value = this.value.replace(/[^0-9]/g, '')" />
      <span class="text-danger">
        @error('mobile')
          {{$message}}
        @enderror
      </span>
    </div>
   

    <!-- Password input -->
    <div class="form-outline mb-4">
      <input type="password" value="{{old('password')}}" class="form-control @error('password') is-invalid @enderror" name="password"  placeholder="Password" id="form3Example4" class="form-control" />
      <span class="text-danger">
        @error('password')
          {{$message}}
        @enderror
      </span>
    </div>

    <!-- Submit button -->
    <button type="submit" class="btn btn-primary btn-block mb-4">
      Continue
    </button>


    <!-- Register buttons -->
    <div class="text-center">
      <p class="text-sm">Already Registered? <a href="{{url('login')}}">LOG IN</a></p>
    </div>
  </form>

@endsection


