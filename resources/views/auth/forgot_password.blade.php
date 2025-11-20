@extends('layouts.auth')

@section('body-class', 'login-page')

@section('content')
<div class="login-box">
    <div class="login-logo">
        <a href="{{ route('login') }}"><b>Admin</b>LTE</a>
    </div>
    <div class="card">
        <div class="card-body login-card-body">
            <p class="login-box-msg">Enter your email address and we will send you a link to reset your password</p>
            <form action="{{ route('password.email') }}" method="post">
                @csrf
                <div class="input-group mb-3">
                    <div class="input-group-text"><span class="bi bi-envelope"></span></div>
                    <input type="email" class="form-control @error('email') is-invalid @enderror" placeholder="Email"
                        value="{{ old('email') }}" name="email" />
                    @error('email')
                    <div class="invalid-feedback">
                        {{ $message }}
                    </div>
                    @enderror
                </div>
                <div class="row">
                    <div class="d-grid gap-2">
                        <button type="submit" class="btn btn-primary">Send me the link</button>
                    </div>
                </div>
            </form>
            <div class="mt-3 text-center">
                <p class="mb-1"><a href="{{ route('login') }}">Back to login</a></p>
            </div>
        </div>
    </div>
</div>
@endsection
