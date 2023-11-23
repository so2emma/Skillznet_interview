@extends('layouts.lapp')
<div class="row align-item-center">
    <div class="col-6 banner">
        <img src="{{ asset('img/bg6.jpg') }}" alt="">
    </div>


    <div class="col-6 otherside">
        <div class="container d-flex justify-content-center align-items-center flex-column h-100">
            <div>
                <div class="logo">
                    <img src="{{ asset('img/logo.png') }}" alt="">
                </div>
                <h4 class="text-center mb-4">ACCOUNT REGISTER</h4>
                <form method="POST" action="{{ route('register') }}" class="mt-4">
                    @csrf

                    <div class="row">

                        <div class="mb-3 col-6">
                            <input id="firstname" type="text"
                                class="form-control @error('firstname') is-invalid @enderror" name="firstname"
                                value="{{ old('firstname') }}" required placeholder="firstname" autofocus>

                            @error('firstname')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                            @enderror
                        </div>

                        <div class="mb-3 col-6">
                            <input id="lastname" type="text"
                                class="form-control @error('lastname') is-invalid @enderror" name="lastname"
                                value="{{ old('lastname') }}" required placeholder="lastname" autofocus>

                            @error('lastname')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                            @enderror
                        </div>
                    </div>

                    <div class="row">

                        <div class="mb-3 col-6">
                            <input id="username" type="text"
                                class="form-control @error('username') is-invalid @enderror" name="username"
                                value="{{ old('username') }}" required placeholder="username" autofocus>

                            @error('username')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                            @enderror
                        </div>

                        <div class="mb-3 col-6">
                            <input id="email" type="email"
                                class="form-control @error('email') is-invalid @enderror" name="email"
                                value="{{ old('email') }}" required placeholder="email">

                            @error('email')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                            @enderror
                        </div>
                    </div>

                    <div class="row">

                        <div class="mb-3 col-6">
                            <input id="password" type="password"
                                class="form-control @error('password') is-invalid @enderror" name="password" required
                                placeholder="new-password">

                            @error('password')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                            @enderror
                        </div>

                        <div class="mb-3 col-6">

                            <input id="password-confirm" type="password" class="form-control"
                                name="password_confirmation" required placeholder="Confirm">
                        </div>
                    </div>
                    <div class="d-grid gap-2 mb-4">
                        <button type="submit" class="btn btn-primary">
                            REGISTER
                        </button>
                    </div>

                    <div class="m-auto">
                        <a style="display: block" class="text-danger text-center" href="{{ route('login') }}">Already a user? Login</a>
                    </div>
            </div>



            </form>

        </div>

    </div>
</div>
</div>
</div>
@section('contain')
