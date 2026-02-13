@extends('layouts.app')

@section('title', 'Welcome')

@section('content')

    {{-- <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Dashboard') }}
        </h2>
    </x-slot> --}}

    <div class="dashboard-container">
        @include('layouts.sidebar')
        {{-- @include('layouts.navigation') --}}

        <main class="main-content">

            @include('layouts.header-nav')

            <div class="dashboard-grid">
                <section class="card hero-card">
                    <div class="level-box">
                        <div class="circle-xp">
                            <span>Level 7</span>
                            <small>580/800 XP</small>
                        </div>
                        <div class="text">
                            <h2>Hello</h2>
                            <p>Newbie Dasher</p>
                            <button class="btn-profile">View Full Profile</button>
                        </div>
                    </div>
                    <div class="robot-mascot">
                        <img src="{{ asset('images/moni/moni-track.png') }}" alt="Robot Mascot">
                    </div>
                </section>

                <section class="card savings-card">
                    <p>Total Savings</p>
                    <h1>5,000</h1>
                    <p class="green-text">+500 this week</p>
                </section>

                <section class="card stat-card">
                    <p>Total Spent this Month</p>
                    <h2>6,200</h2>
                    <span class="badge safe">Safe</span>
                </section>

                <section class="card stat-card">
                    <p>Weekly Budget Left</p>
                    <h2>300</h2>
                    <span class="badge low">Low Energy</span>
                </section>

                <section class="card stat-card">
                    <p>Streak / Combo Days</p>
                    <h2>4 day</h2>
                </section>

                <section class="card stat-card">
                    <p>Emergency Funds</p>
                    <h2>1,300</h2>
                </section>

                <section class="card quest-card">
                    <h3>Quest</h3>
                    <div class="quest-item">
                        <span>Buy new Phone</span>
                        <button>Go to</button>
                    </div>
                    <div class="quest-item">
                        <span>Travel</span>
                        <button>Go to</button>
                    </div>
                    <div class="quest-item">
                        <span>Date</span>
                        <button>Go to</button>
                    </div>
                </section>

                <section class="card activity-card">
                    <h3>Recent Activity</h3>
                    <table>
                        <thead>
                            <tr>
                                <th>#</th>
                                <th>Category</th>
                                <th>Amount</th>
                                <th>Date</th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr><td>1</td><td>Expenses</td><td>500</td><td>01-25-26</td></tr>
                            <tr><td>2</td><td>Savings</td><td>1,600</td><td>02-10-26</td></tr>
                            <tr><td>3</td><td>Grant</td><td>300</td><td>02-12-26</td></tr>
                            <tr><td>4</td><td>Transportation</td><td>500</td><td>02-15-26</td></tr>
                        </tbody>
                    </table>
                </section>
            </div>

        </main>

    </div>

@endsection
