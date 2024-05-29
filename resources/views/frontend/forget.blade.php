@extends('layouts.login')
@section('login_form')

<form action="{{route('forget_pass_with_email')}}" method="post">
     @csrf
    <div class="form-outline mb-4">
      <input type="email" value="{{old('email')}}" class="form-control @error('email') is-invalid @enderror" name="email"  placeholder="Email address" id="form3Example3" class="form-control" />
      <span class="text-danger">
        @error('email')
          {{$message}}
        @enderror
      </span>
    </div>

    <button type="submit" class="btn btn-primary btn-block mb-4">
       GENERATE OTP 
    </button>
  </form>

      </form>
    </div>
  </div>


@endsection


