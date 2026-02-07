@extends('layouts.app')  <!-- extends layout -->

@section('title', 'Welcome') <!-- page title -->

@section('content')

<main class="welcome-container">
    <div class="logo">
        <img src="{{ asset('images/moni/moni-logo.png') }}" alt="Moni Logo">
        <h1>MoniDash</h1>
    </div>
    <section class="welcome-section">
        <div class="get-started">
            <div class="intro-welcome">
                <h1>Track. Save. Grow</h1>
                <h4>let's make every cent count</h4>
                <p>Smart tracking for a smarter you. Your budget's new best friend is ready.</p>
                <div>
                    <a href="#" class="get-started-btn">Get Started</a>
                </div>
            </div>
            <div class="intro-moni">
                <img src="{{ asset('images/moni/moni-float.png') }}" alt="Moni Image">
            </div>
        </div>
    </section>
</main>


@endsection
