@extends('layouts.app')

@section('title', 'Welcome')

@section('content')
<main class="welcome-container">
    <div class="logo">
        <a href="{{ route('welcome') }}"><img src="{{ asset('images/moni/monidash-logo.png') }}" alt="Moni Logo"></a>
    </div>
    <section class="welcome-section">
        <div class="get-started">
            <div class="moni-wave">
                <img src="{{ asset('images/moni/moni-wave.png') }}" alt="Moni Image">
            </div>
            <div class="intro-welcome">
                <h1>Track. Save. Grow</h1>
                <h4>let's make every cent count</h4>
                <p>Smart tracking for a smarter you. Your budget's <br> new best friend is ready.</p>
                <div>
                    <a href="{{ route('login') }}" class="get-started-btn">Get Started</a>
                </div>
            </div>
            <div class="moni-float">
                <img src="{{ asset('images/moni/moni-float.png') }}" alt="Moni Image">
            </div>
        </div>
    </section>
</main>
@endsection
