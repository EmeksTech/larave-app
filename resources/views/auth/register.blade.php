@extends('layouts.auth')
@section('login')
    <form action="{{route('register')}}" method="POST">
        @csrf
        <img class="mb-4" src="../assets/brand/bootstrap-logo.svg" alt="" width="72" height="57">
        <h1 class="h3 mb-3 fw-normal">Create Account</h1>

        <x-errors />

        <div class="form-floating">
            <input value="{{old('name')}}" name="name" type="text" class="form-control" id="name" placeholder="Full Name">
            <label for="name">Full Name</label>
        </div>
        <div class="form-floating">
            <input value="{{old('email')}}"  name="email" type="email" class="form-control" id="floatingInput" placeholder="name@example.com">
            <label for="floatingInput">Email address</label>
        </div>
        <div class="form-floating">
            <input name="password" type="password" class="form-control" id="Password" placeholder="Password">
            <label for="Password">Password</label>
        </div>
        <div class="form-floating">
            <input name="password_confirmation" type="password" class="form-control" id="floatingPassword" placeholder="Password">
            <label for="Comfirm Password">Confrim Password</label>
        </div>


        <button class="w-100 btn btn-lg btn-primary" type="submit">Sign in</button>
        <p class="mt-5 mb-3 text-muted">&copy; 2021–2022</p>
    </form>
@endsection
