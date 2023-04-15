@extends('layout.main')

@push('title')
    <title>
        Allinlibrary
    </title>
@endpush

@section('content')

  <div class="container my-5 pt-5">
    <div class="row justify-content-center">
      <div class="col-md-8">
        <div class="card">
          <div class="card-header bg-primary text-white text-uppercase">Join as a    {{$logintype}}</div>
          <div class="card-body">
            <form method="post" action="{{route('user.register')}}">
                @csrf
              <div class="form-group">
                <label for="name">Name</label>
                <input type="text" class="form-control" name='name' value="{{old('email')}}"   id="name">
                <span class="text-danger">
                    @error('name')
                    {{$message}}
                    @enderror
                </span>
              </div>
              <div class="form-group">
                <label for="email">Email</label>
                <input type="email" class="form-control" value="{{old('email')}}"  name='email' id="email">
                <span class="text-danger">
                    @error('email')
                    {{$message}}
                    @enderror
                </span>
              </div>
              <div class="form-group">
                <label for="password">Password</label>
                <input type="password" class="form-control" name='password' id="password">
                <span class="text-danger">
                    @error('password')
                    {{$message}}
                    @enderror
                </span>
              </div>
              <div class="form-group">
                <label for="password_confirmation">Confirm Password</label>
                <input type="password" class="form-control" name='password_confirmation' id="password_confirmation">
                <span class="text-danger">
                    @error('password_confirmation')
                    {{$message}}
                    @enderror
                </span>
              </div>
              <button type="submit" class="btn btn-primary mt-2">Register</button>
            </form>
          </div>
        </div>
      </div>
    </div>
  </div>

@endsection
