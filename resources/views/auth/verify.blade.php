@extends('frontend.layouts.auth-base')

@section('content')
    <h3 class="font-weight-400 mb-4">{{ __('Verify Your Email Address') }}</h3>
    @if (session('resent'))
        <div class="alert alert-success" role="alert">
            {{ __('A new verification link has been sent to your email address.') }}
        </div>
    @endif

    {{ __('Before proceeding, please check your email for a verification link.') }}
    <br/>
    <br/>
    <br/>
    {{ __('If you did not receive the email') }},
    <form class="d-inline" method="POST" action="{{ route('verification.resend') }}">
        @csrf
        <button class="btn btn-primary btn-block my-4" type="submit">{{ __('Click here to request another') }}</button>
    </form>
@endsection
