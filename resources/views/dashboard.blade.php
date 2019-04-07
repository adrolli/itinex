@extends('layouts.app')

@section('content')

<div class="section">
    <div class="content">
        <div class="container" id="app">
                <h1>Dashboard</h1>
            @if (session('status'))
                <div class="alert alert-success" role="alert">
                    {{ session('status') }}
                </div>
            @endif

            You are logged in!
       </div>
    </div>
</div>

@endsection