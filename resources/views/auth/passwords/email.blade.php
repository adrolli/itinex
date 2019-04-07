@extends('layouts.app')

@section('content')
<section class="hero">
        <div class="hero-body">
            <div class="container has-text-centered">
                <div class="column is-4 is-offset-4">
                    <h3 class="title has-text-grey">{{ __('Reset Password') }}</h3>
                    <div class="box">
                        <figure class="avatar">
                            <img src="/img/suparavel-logo-100.png" >
                        </figure>

                        <hr>

                        @if (session('status'))
                            <div class="alert alert-success" role="alert">
                                {{ session('status') }}
                            </div>
                        @endif

                        <form method="POST" action="{{ route('password.email') }}" aria-label="{{ __('Reset Password') }}">
                            @csrf

                            <div class="field">
                                                                        
                                    <label for="email">{{ __('E-Mail Address') }}</label>

                                    <div class="control">

                                    <input placeholder="{{ __('E-Mail Address') }}" id="email" type="email" class="input is-large form-control{{ $errors->has('email') ? ' is-invalid' : '' }}" name="email" value="{{ old('email') }}" required>

                                    @if ($errors->has('email'))
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $errors->first('email') }}</strong>
                                        </span>
                                    @endif
                                </div>
                            </div>

                            <div class="field">
                                <div class="control">
                                    <button type="submit" class="button is-block is-info is-large is-fullwidth">
                                        {{ __('Send Password Reset Link') }}
                                    </button>
                                </div>
                            </div>
                        </form>

                        </div>
                    <p class="has-text-grey">
                        <a href="{{ route('login') }}">{{ __('Login') }}</a> &nbsp;·&nbsp;
                        <a href="{{ route('register') }}">{{ __('Register') }}</a> &nbsp;·&nbsp;
                    </p>
                </div>
            </div>
        </div>
    </section>
@endsection
