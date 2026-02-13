@extends('layouts.app')

@section('title', 'Welcome')

@section('content')

<main class="register-container">
    <div class="logo">
        <a href="{{ route('welcome') }}"><img src="{{ asset('images/moni/monidash-logo.png') }}" alt="Moni Logo"></a>
    </div>
<section class="register-section">
    <div class="register-main-wrapper">
        <div class="deco-bar-top"></div>

        <div class="outer-frame">
            <div class="register-box">
                <div class="register-header-row">
                    <div class="info-icon">?</div>
                    <div class="title-bar">{{ __('Create New Account') }}</div>
                </div>

                <form method="POST" action="{{ route('register') }}">
                    @csrf

                    <div class="form-grid">
                        <div>
                            <input id="name" class="scifi-input" type="text" name="name"
                                   placeholder="Full Name" value="{{ old('name') }}" required autofocus />
                            <x-input-error :messages="$errors->get('name')" class="error-msg" />
                        </div>

                        <div>
                            <input id="email" class="scifi-input" type="email" name="email"
                                   placeholder="Email Address" value="{{ old('email') }}" required />
                            <x-input-error :messages="$errors->get('email')" class="error-msg" />
                        </div>

                        <div>
                            <input id="password" class="scifi-input" type="password" name="password"
                                   placeholder="Password" required autocomplete="new-password" />
                            <x-input-error :messages="$errors->get('password')" class="error-msg" />
                        </div>

                        <div>
                            <input id="password_confirmation" class="scifi-input" type="password"
                                   name="password_confirmation" placeholder="Confirm Password" required />
                            <x-input-error :messages="$errors->get('password_confirmation')" class="error-msg" />
                        </div>

                        <div class="full-width">
                            <button type="submit" class="register-btn-custom">
                                {{ __('Register User') }}
                            </button>

                            <p class="helper-text">
                                Already registered? <a href="{{ route('login') }}">Access Account</a>
                            </p>
                        </div>
                    </div>
                </form>
            </div>
        </div>

        <div class="deco-bar-bottom"></div>
    </div>
</section>
</main>
@endsection
