@php($title = "Verify Email")

@extends('frontend.layouts.auth-base')

@section('content')
    <h3 class="mb-4">{{ __('Verify Your Email Address') }}</h3>
    @if (session('resent'))
        <div class="alert alert-success" role="alert">
            {{ __('A new verification link has been sent to your email address.') }}
        </div>
    @endif

    We have sent a verification link to your email address. Please <strong>check your email</strong> and verify to proceed.
    <br/>
    <br/>
    <br/>
    {{ __('If you did not receive the email') }},
    <form class="d-inline" method="POST" action="{{ route('verification.resend') }}">
        @csrf
        <button class="btn btn-primary my-4" type="submit">{{ __('Click here to request another') }}</button>
    </form>
    <br>
    <a href="{{route("home")}}"><i class="fas fa-angle-left"></i> Back to Home</a>
@endsection
