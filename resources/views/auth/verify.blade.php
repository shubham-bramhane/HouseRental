@extends('layouts.mainhouse')

@section('page-content')
<div class="container">
    <div class="row justify-content-center" style="margin-top: 193px;">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header bg-success text-white fw-bold" style="text-align: center;">{{ __('Verify Your Email Address') }}</div>

                <div class="card-body">
                    @if (session('resent'))
                        <div class="alert alert-success" role="alert">
                            {{ __('A fresh verification link has been sent to your email address.') }}
                        </div>
                    @endif

                    {{ __('Before proceeding, please check your email for a verification link.') }}
                    {{ __('If you did not receive the email') }},
                    <form class="d-inline" method="POST" action="{{ route('verification.resend') }}">
                        @csrf
                        <button type="submit" class="btn btn-b-n fw-bold">{{ __('click here to request another') }}</button>.
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
