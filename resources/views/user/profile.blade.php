@extends('layouts.app')

@section('content')

<div class="section">
    <div class="content">
        <div class="container" id="app">
            <h1>Profile</h1>

            <form method="post" action="{{route('user.update', $user)}}">
                {{ csrf_field() }}
                {{ method_field('patch') }}

                <div class="field">

                    <label for="name">{{ __('Name') }}</label>

                    <div class="control">

                        <input type="text" name="name" class="input is-large{{ $errors->has('name') ? ' is-danger' : '' }}" value="{{ $user->name }}" />

                    </div>
                </div>
                
                <div class="field">

                    <label for="name">{{ __('E-Mail Address') }}</label>

                    <div class="control">

                        <input type="email" name="email" class="input is-large{{ $errors->has('email') ? ' is-danger' : '' }}" value="{{ $user->email }}" />

                    </div>
                </div>

                <div class="field">

                    <label for="name">{{ __('Password') }}</label>

                    <div class="control">

                        <input type="password" class="input is-large{{ $errors->has('password') ? ' is-danger' : '' }}" name="password" />

                    </div>
                </div>

                <div class="field">

                    <label for="name">{{ __('Confirm Password') }}</label>

                    <div class="control">


                        <input type="password" class="input is-large" name="password_confirmation" />

                    </div>
                </div>

                <div class="field">
                    <div class="control">

                        <button type="submit" class="button is-block is-info is-large is-fullwidth">Edit Profile</button>

                    </div>
                </div>

            </form>
       </div>
    </div>
</div>

@endsection