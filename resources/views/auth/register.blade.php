@extends('layouts.master')
@section('title', 'Register')


<style>
    .site-footer {
        display: none
    }
</style>



<div class="site-mobile-menu site-navbar-target">
    <div class="site-mobile-menu-header">
        <div class="site-mobile-menu-close">
            <span class="icofont-close js-menu-toggle"></span>
        </div>
    </div>
    <div class="site-mobile-menu-body"></div>
</div>

@section('content')

    <div class="heros overlays" style="background-image: url('images/about.jpg')">
        <div class="container">
            <div class="row align-items-center justify-content-center">
                <div class="col-lg-6 text-center">
                    <h1 class="heading text-white mb-2" data-aos="fade-up">CodeMates Register </h1>
                    <p data-aos="fade-up" class=" mb-5 text-white lead text-white-40">Home / Register </p>


                </div>


            </div>
        </div>
    </div>
    <!-- Session Status -->
    <x-auth-session-status class="mb-4" :status="session('status')" />

    <section class="text-center text-lg-start" style="padding: 100px 0;">
        <style>
            .cascading-right {
                margin-right: -50px;
            }

            @media (max-width: 991.98px) {
                .cascading-right {
                    margin-right: 0;
                }
            }
        </style>


        <!-- Jumbotron -->
        <div class="container py-4">

            <div class="row g-0 align-items-center">

                <div class="col-lg-6 mb-5 mb-lg-0">
                    <img src="../images/Sign up-cuate.png" class="w-100 h-100 rounded-4 shadow-4 d-none d-lg-block"
                        alt="" />
                </div>
                <div class="col-lg-6 mb-5 mb-lg-0">

                    <div class="card cascading-right"
                        style="
            background: hsla(0, 0%, 100%, 0.55);
            backdrop-filter: blur(30px);
            ">

                        <div class="card-body p-5 shadow-5 text-center">
                            <h2 class="fw-bold mb-5 style="color:#555;"">Register</h2>

                            @csrf
                            <form method="POST" action="{{ route('register') }}">
                                @csrf
                                <!-- Name -->
                                <div class="form-group">
                                    <label for="name"> Name</label>
                                    <input id="name" class="form-control" type="text" name="name"
                                        :value="old('name')" required autofocus autocomplete="name" />
                                    <x-input-error :messages="$errors->get('name')" class="mt-2" />
                                </div>

                                <!-- Last Name -->
                                {{-- <div class="form-group">
                                    <label for="last_name">Last Name</label>
                                    <input id="last_name" class="form-control" type="text" name="last_name"
                                        :value="old('last_name')" required autofocus autocomplete="name" />
                                    <x-input-error :messages="$errors->get('last_name')" class="mt-2" />
                                </div> --}}

                                <!-- Email Address -->
                                <div class="form-group">
                                    <label for="email">Email</label>
                                    <input id="email" class="form-control" type="email" name="email"
                                        :value="old('email')" required autocomplete="username" />
                                    <x-input-error :messages="$errors->get('email')" class="mt-2" />
                                </div>

                                <!-- Phone Number -->
                                <div class="form-group">
                                    <label for="phone">Phone Number</label>
                                    <input id="phone" class="form-control" type="text" name="phone"
                                        :value="old('phone')" required autofocus autocomplete="name" />
                                    <x-input-error :messages="$errors->get('phone')" class="mt-2" />
                                </div>

                                <!-- Password -->
                                <div class="form-group">
                                    <label for="password">Password</label>
                                    <input id="password" class="form-control" type="password" name="password" required
                                        autocomplete="new-password" />
                                    <x-input-error :messages="$errors->get('password')" class="mt-2" />
                                </div>

                                <!-- Confirm Password -->
                                <div class="form-group">
                                    <label for="password_confirmation">Confirm Password</label>
                                    <input id="password_confirmation" class="form-control" type="password"
                                        name="password_confirmation" required autocomplete="new-password" />
                                    <x-input-error :messages="$errors->get('password_confirmation')" class="mt-2" />
                                </div>


                                <button type="submit" class="btn btn-primary" style="width:100%;   margin:10px 0 ;">
                                    Register
                                </button>


                            </form>
                        </div>
                    </div>
                </div>

            </div>
        </div>
        <!-- Jumbotron -->
    </section>

@endsection
