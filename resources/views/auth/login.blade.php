@extends('layouts.app')

@section('content')
<section class="hero">
        <div class="hero-body">
            <div class="container has-text-centered">
                <div class="column is-4 is-offset-4">
                    <h3 class="title has-text-grey">{{ __('Login') }}</h3>
                    <div class="box">
                        <figure class="avatar">
                            <img src="/img/suparavel-logo-100.png" >
                        </figure>

                        <hr>

                        <form method="POST" action="{{ route('login') }}" aria-label="{{ __('Login') }}">
                            @csrf

                            <div class="field">
                                <div class="control">
                                    <input placeholder="{{ __('E-Mail Address') }}" id="email" type="email" class="input is-large form-control{{ $errors->has('email') ? ' is-invalid' : '' }}" name="email" value="{{ old('email') }}" required autofocus>
                                    @if ($errors->has('email'))
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $errors->first('email') }}</strong>
                                        </span>
                                    @endif
                                </div>
                            </div>

                            <div class="field">
                                <div class="control">
                                    <input placeholder="{{ __('Password') }}" id="password" type="password" class="input is-large form-control{{ $errors->has('password') ? ' is-invalid' : '' }}" name="password" required>
                                    @if ($errors->has('password'))
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $errors->first('password') }}</strong>
                                        </span>
                                    @endif
                                </div>
                            </div>

                            <div class="field">
                                <div class="control">
                                    <div class="form-check">
                                        <input class="form-check-input" type="checkbox" name="remember" id="remember" {{ old('remember') ? 'checked' : '' }}>

                                        <label class="checkbox" for="remember">
                                            {{ __('Remember Me') }}
                                        </label>
                                    </div>
                                </div>
                            </div>

                            <div class="field">
                                <div class="control">
                                    <button type="submit" class="button is-block is-info is-large is-fullwidth">
                                        {{ __('Login') }}
                                    </button>
                                </div>
                            </div>
                        </form>

                    </div>
                    <p class="has-text-grey">
                        <a href="{{ route('register') }}">{{ __('Register') }}</a> &nbsp;·&nbsp;
                        <a href="{{ route('password.request') }}">{{ __('Forgot Your Password?') }}</a> &nbsp;·&nbsp;
                    </p>
                </div>
            </div>
        </div>
    </section>
    
@endsection
