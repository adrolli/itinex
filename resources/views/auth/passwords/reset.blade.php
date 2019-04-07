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

                        <form method="POST" action="{{ route('password.request') }}" aria-label="{{ __('Reset Password') }}">
                            @csrf

                            <input type="hidden" name="token" value="{{ $token }}">

                            <div class="field">

                                <label for="email">{{ __('E-Mail Address') }}</label>                            

                                <div class="control">
                                    <input placeholder="{{ __('E-Mail Address') }}" id="email" type="email" class="input is-large form-control{{ $errors->has('email') ? ' is-invalid' : '' }}" name="email" value="{{ $email ?? old('email') }}" required autofocus>

                                    @if ($errors->has('email'))
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $errors->first('email') }}</strong>
                                        </span>
                                    @endif
                                </div>
                            </div>

                            <div class="field">

                                <label for="password">{{ __('Password') }}</label>

                                <div class="control">
                                    <input id="password" type="password" class="input is-large form-control{{ $errors->has('password') ? ' is-invalid' : '' }}" name="password" required>

                                    @if ($errors->has('password'))
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $errors->first('password') }}</strong>
                                        </span>
                                    @endif
                                </div>
                            </div>

                            <div class="field">

                                <label for="password-confirm">{{ __('Confirm Password') }}</label>

                                <div class="control">
                                    <input id="password-confirm" type="password" class="input is-large form-control" name="password_confirmation" required>
                                </div>
                            </div>

                            <div class="field">
                                <div class="control">
                                    <button type="submit" class="btn btn-primary">
                                        {{ __('Reset Password') }}
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
