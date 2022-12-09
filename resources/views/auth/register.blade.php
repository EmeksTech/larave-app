@extends('layouts.auth')
@section('content')

<form action="{{route('register')}}" method="POST">
  @csrf
    <img class="mb-4" src="../assets/brand/bootstrap-logo.svg" alt="" width="72" height="57">
    <h1 class="h3 mb-3 fw-normal">Create Account</h1>
    <x-errors/>
    <div class="form-floating">
        <input value="{{old('name')}}" type="text" name="name" class="form-control" id="name" placeholder="Fullname">
        <label for="name">Full name</label>
      </div>

    <div class="form-floating">
      <input value="{{old('email')}} type="email" name="email" class="form-control" id="floatingInput" placeholder="name@example.com">
      <label for="floatingInput">Email address</label>
    </div>
    <div class="form-floating">
      <input type="password" name="password" class="form-control" id="floatingPassword" placeholder="Password">
      <label for="floatingPassword">Password</label>
    </div>
    <div class="form-floating">
        <input type="password" name="password_confirmation" class="form-control" id="floatingPassword" placeholder="Password">
        <label for="floatingPassword">Confirm password</label>
      </div>


    <button class="w-100 btn btn-lg btn-primary" type="submit">Register</button>
    <p class="mt-5 mb-3 text-muted">&copy; 2017–2022</p>
  </form>
@endsection
