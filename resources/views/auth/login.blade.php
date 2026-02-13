@extends('layouts.app')

@section('title', 'Welcome')

@section('content')
<main class="login-container">
    <div class="logo">
        <a href="{{ route('welcome') }}"><img src="{{ asset('images/moni/monidash-logo.png') }}" alt="Moni Logo"></a>
    </div>
<section class="login-section">
    <div class="main-wrapper">
        <div class="deco-bar-top"></div>

        <div class="outer-frame">
            <div class="login-box">
                <div class="login-header-row">
                    <div class="info-icon">!</div>
                    <div class="title-bar">{{ __('LOG IN') }}</div>
                </div>

                <x-auth-session-status class="mb-4" :status="session('status')" />

                <form method="POST" action="{{ route('login') }}">
                    @csrf

                    <div class="mb-4 text-left">
                        <input id="email" class="scifi-input" type="email" name="email"
                               placeholder="Email Address" value="{{ old('email') }}"
                               required autofocus autocomplete="username" />
                        <x-input-error :messages="$errors->get('email')" class="error-msg" />
                    </div>

                    <div class="mb-4 text-left">
                        <input id="password" class="scifi-input" type="password" name="password"
                               placeholder="Password" required autocomplete="current-password" />
                        <x-input-error :messages="$errors->get('password')" class="error-msg" />
                    </div>

                    <div class="flex items-center justify-between mb-4">
                        <label for="remember_me" class="inline-flex items-center">
                            <input id="remember_me" type="checkbox" class="rounded border-gray-300 text-cyan-600 shadow-sm" name="remember">
                            <span class="ms-2 text-xs text-gray-400">{{ __('Remember me') }}</span>
                        </label>

                        @if (Route::has('password.request'))
                            <a class="text-xs text-gray-400 hover:text-white" href="{{ route('password.request') }}">
                                {{ __('Forgot password?') }}
                            </a>
                        @endif
                    </div>

                    <button type="submit" class="login-btn-custom">
                        {{ __('Access System') }}
                    </button>

                    <p class="helper-text">
                        No Account? <a href="{{ route('register') }}">Sign up now</a>
                    </p>
                </form>
            </div>
        </div>

        <div class="deco-bar-bottom"></div>
    </div>
</section>
</main>
@endsection
