@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">{{ __('Dashboard') }}</div>

                <div class="card-body">
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif


                    <p> <strong>Welcome,</strong> {{ auth()->user()->username }}</p>
                    <p> <strong>Fullname:</strong> {{ auth()->user()->firstname }}, {{ auth()->user()->lastname }} </p>
                    <p><strong>Email:</strong> {{ auth()->user()->email }}</p>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
