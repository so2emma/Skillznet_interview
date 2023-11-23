@extends('layouts.lapp')
<div class="row align-item-center">
    <div class="col-6 banner">
        <img src="{{ asset('img/bg6.jpg') }}" alt="">
    </div>


    <div class="col-6 otherside">
        <div>
            <div class="text-end">
                <a href="{{ route('register') }}" class="btn btn-primary m-3">
                CREATE ACCOUNT
                </a>
        </div>
        </div>
        <div class="container d-flex justify-content-center align-items-center flex-column h-100">
            <div>
                <div class="logo">
                    <img src="{{ asset('img/logo.png') }}" alt="">
                </div>
                <p class="text-center">ACCOUNT LOGIN</p>
                <div>

                    <form method="POST" action="{{ route('login') }}">

                        @csrf

                        <div class="mb-3">
                                <input id="username" type="username" class="form-control @error('username') is-invalid @enderror" name="username" value="{{ old('username') }}" required autocomplete="username" autofocus>

                                @error('username')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                        </div>

                        <div class="mb-3">
                                <input id="password" type="password" class="form-control @error('password') is-invalid @enderror" name="password" required autocomplete="current-password">
                                @error('password')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                        </div>

                        <div class="d-grid gap-2 mb-4">
                                <button type="submit" class="btn btn-primary btn-block">
                                    SIGN IN
                                </button>
                        </div>

                        <div>
                            <p class="text-danger text-center">Forgot your password?</p>
                        </div>

                    </form>
                </div>
            </div>

        </div>
    </div>
</div>
@section('contain')
