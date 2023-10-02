@extends('layouts.ahmadmaster')
@section('title', 'Home')



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

    <!-- Session Status -->
    <x-auth-session-status class="mb-4" :status="session('status')" />

    <section class="text-center text-lg-start" style="    padding: 100px 0;">
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
                    <div class="card cascading-right"
                        style="
            background: hsla(0, 0%, 100%, 0.55);
            backdrop-filter: blur(30px);
            ">
                        <div class="card-body p-5 shadow-5 text-center">
                            <h2 class="fw-bold mb-5 style="color:#555;"">Login</h2>

                            <form method="POST" action="{{ route('login') }}">
                                @csrf


                                <!-- Email input -->
                                <div class="form-outline mb-4">
                                    <label class="form-label" for="form3Example3">Email address</label>
                                    <input type="email" name="email" :value="old('email')" required autofocus
                                        autocomplete="username" id="form3Example3" class="form-control" />
                                </div>

                                <!-- Password input -->
                                <div class="form-outline mb-4">
                                    <label class="form-label" for="form3Example4">Password</label>
                                    <input id="password" class="form-control" type="password" name="password" required
                                        autocomplete="current-password" id="form3Example4" />
                                </div>
                                <x-input-error :messages="$errors->get('password')" class="mt-2" />

                                <!-- Checkbox -->

                                <div class="block mt-4 text-left">
                                    <label for="remember_me" class="inline-flex items-center">
                                        <input id="remember_me" type="checkbox"
                                            class="rounded border-gray-300 text-indigo-600 shadow-sm focus:ring-indigo-500"
                                            name="remember">
                                        <span class="ml-2 text-sm text-gray-600">{{ __('Remember me') }}</span>
                                    </label>
                                </div>
                                <!-- Submit button -->
                                <button type="submit" class="btn btn-primary" style="width:100%;   margin:10px 0 ;">
                                    login
                                </button>

                                <div class="flex items-center justify-center m-4">
                                    @if (Route::has('password.request'))
                                        <a class="underline text-sm text-gray-600 hover:text-gray-900 rounded-md focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-indigo-500"
                                            href="{{ route('password.request') }}">
                                            {{ __('Forgot your password?') }}
                                        </a>
                                    @endif

                                </div>

                                <!-- Register buttons -->
                                <div class="text-center">
                                    <p>or login with:</p>

                                    <a
                                        href="{{ route('facebook') }}"style="padding: 0 10px; font-size:25px; color: #ede43c"><i
                                            class="fab fa-facebook-f"></i></a>
                                    <a href="{{ route('google') }}"
                                        style="padding: 0 10px; font-size:25px; color: #ede43c"><i
                                            class="fab fa-google"></i></a>
                                    <a href="{{ route('github') }}"style="padding: 0 10px; font-size:25px; color: #ede43c"><i
                                            class="fab fa-github"></i></a>

                                </div>
                            </form>
                        </div>
                    </div>
                </div>

                <div class="col-lg-6 mb-5 mb-lg-0">
                    <img src="../images/Tablet login-cuate.png" class="w-100 rounded-4 shadow-4 d-none d-lg-block "
                        style="height: 100%" alt="" />
                </div>
            </div>
        </div>
        <!-- Jumbotron -->
    </section>
@endsection