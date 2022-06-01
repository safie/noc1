@extends('layouts.appDash')

@section('content')
    <div class="container-xl px-4 mt-n10">

        <div class="card">
            <div class="card-header">{{ __('Dashboard') }}</div>

            <div class="card-body">
                @if (session('status'))
                    <div class="alert alert-success" role="alert">
                        {{ session('status') }}
                    </div>
                @endif

                {{ __('You are logged in!') }}
            </div>
        </div>

    </div>
@endsection
