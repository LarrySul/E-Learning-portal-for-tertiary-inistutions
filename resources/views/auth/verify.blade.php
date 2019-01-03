@extends('layouts.admin.app')

@section('content')

<div class="error-pagewrap">
    <div class="error-page-int">
        <div class="text-center m-b-md custom-login">
            <h3>{{ __('Verify Your Email Address') }}</h3>
        </div>
        <div class="content-error">
            <div class="hpanel">
                <div class="panel-body">
                @if (session('resent'))
                    <div class="alert alert-success" role="alert">
                        {{ __('A fresh verification link has been sent to your email address.') }}
                    </div>
                @endif

                {{ __('Before proceeding, please check your email for a verification link.') }}
                {{ __('If you did not receive the email') }}, <a href="{{ route('verification.resend') }}">{{ __('click here to request another') }}</a>.
                
                </div>
            </div>
        </div>
    </div>   
</div>
@endsection
