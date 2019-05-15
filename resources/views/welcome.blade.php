@extends('layouts.app')

@section('content')

    <section class="hero">
        <div class="hero-body">
            <div class="container">
                <h1 class="title">
                    Itininex - Itinerary and Expense
                </h1>
                <h2 class="subtitle">
                    This is a small app for managing your Itinerary and Expense while traveling.
                </h2>
                <a class="button is-medium is-primary" href="https://github.com/adrolli/itinex" target="_blank">
                    <span class="iconify icon" data-icon="fa-github">
                    </span>
                    <span>Download on GitHub</span>
                </a>
            </div>
        </div>
    </section>

    <hr>

    <section class="content">
        <div class="container" id="app">

            <div class="columns">
                <div class="column has-text-centered">
                    <p>It is also a demo app for building smart web applications with a bunch of frameworks and tools like 
                    Laravel, Vue, Vue Router, Bulma, Bulmaswatch, Buefy and Iconify.</p>
                    <p>Use <b>Username: demo@test.com</b> and <b>Password: demo</b> to test the app.
                    <br><br>
                    <h4>Made with</h4>
                </div>
            </div>

            <div class="columns">
                <div class="column">
                    <a href="https://laravel.com/" target="_blank"><img src="img/laravel-logo-white.png" title="Laravel" alt="Laravel"></a>
                </div>
                <div class="column">
                    <a href="https://bulma.io/" target="_blank"><img src="img/bulma-logo-white.png" title="Bulma" alt="Bulma"></a>
                </div>
                <div class="column">
                    <a href="https://vuejs.org/" target="_blank"><img src="img/vue-logo-white.png" title="Vue.js" alt="Vue.js"></a>
                </div>
                <div class="column">
                    <a href="https://router.vuejs.org/" target="_blank"><img src="img/vuerouter-logo-white.png" title="Vue Router" alt="Vue Router"></a>
                </div>
                <div class="column">
                    <a href="https://buefy.org" target="_blank"><img src="img/buefy-logo-white.png" title="Buefy" alt="Buefy"></a>
                </div>
                <div class="column">
                    <a href="https://jenil.github.io/bulmaswatch/" target="_blank"><img src="img/bulmaswatch-logo-white.png" title="Bulmaswatch" alt="Bulmaswatch"></a>
                </div>
                <div class="column">
                    <a href="https://iconify.design/" target="_blank"><img src="img/iconify-logo-white.png" title="Iconify" alt="Iconify"></a>
                </div>
            </div>

       </div>
    </section>

@endsection