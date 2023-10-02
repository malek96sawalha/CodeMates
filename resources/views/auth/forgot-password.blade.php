
<x-app-layout>

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

            /* Custom styles for the password reset form */
            .password-reset-form {
                background: hsla(0, 0%, 100%, 0.55);
                backdrop-filter: blur(30px);
            }

            .password-reset-form-title {
                color: #555;
            }
        </style>

        <!-- Jumbotron -->
        <div class="container py-4">
            <div class="row g-0 align-items-center">
                
                <div class="col-lg-6 mb-5 mb-lg-0 m-auto">
                    <div class="card cascading-right password-reset-form">
                        <div class="card-body p-4 shadow-5 text-center">
                            <h2 class="fw-bold mb-4 password-reset-form-title">Password Reset</h2>

                            <form method="POST" action="{{ route('password.email') }}">
                                @csrf

                                <!-- Email Address -->
                                <div class="form-outline mb-4">
                                    <label class="form-label" for="form3Example3">Email address</label>
                                    <input type="email" name="email" :value="old('email')" required autofocus autocomplete="username" id="form3Example3" class="form-control" />
                                </div>

                                <x-input-error :messages="$errors->get('email')" class="mt-2" />

                                <!-- Submit button -->
                                <button type="submit" class="btn btn-primary" style="width:100%; margin:10px 0 ;">
                                    Email Password Reset Link
                                </button>

                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- Jumbotron -->
    </section>

    <!-- Include your JavaScript and closing </body> and </html> tags here -->

</x-app-layout>