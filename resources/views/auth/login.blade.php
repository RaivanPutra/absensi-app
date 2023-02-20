@extends('layouts.auth')

@push('style')
<link rel="stylesheet" href="{{ asset('css/auth/login.css') }}">
@endpush

@section('content')

<div class="w-100">


    <main class="form-signin w-100 m-auto shadow" style="background-color: #eeebeb; border-radius: 10px;">
        <form method="POST" action="{{ route('auth.login') }}" id="login-form">
            <h1 class="h3 mb-3 fw-bolder text-center">Login</h1>
            <div class="form-floating">
                <input type="email" class="form-control" id="floatingInputEmail" name="email" placeholder="name@example.com">
                <label for="floatingInputEmail">Email address</label>
            </div>
            <div class="form-floating">
                <input type="password" class="form-control" id="floatingPassword" name="password" placeholder="Password">
                <label for="floatingPassword">Password</label>
            </div>

            <div class="form-check mb-3">
                <input class="form-check-input" type="checkbox" name="remember" id="flexCheckRemember">
                <label class="form-check-label" for="flexCheckRemember">
                    Remember Me
                </label>
            </div>
            <button class="w-100 btn btn-primary" type="submit" id="login-form-button">Login</button>
            <p class="mt-5 mb-3 text-muted text-center fw-semibold">&copy; {{date('Y')}} <span class="">Crafted By : SMKN 1 CIANJUR</span>. </p>
        </form>
    </main>

</div>
@endsection

@push('script')
<script type="module" src="{{ asset('js/auth/login.js') }}"></script>
@endpush