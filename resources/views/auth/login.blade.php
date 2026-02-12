<x-guest-layout>

    <div class="bg-white main-wrapper account-page">
        <div class="p-3 overflow-hidden acc-vh">
            <div class="row vh-100 w-100 g-0">

                <!-- Left Side -->
                <div class="overflow-x-hidden overflow-y-auto col-lg-6 vh-100">
                    <div class="row">
                        <div class="mx-auto col-md-10">

                            <!-- Session Status -->
                            @if (session('status'))
                            <div class="alert alert-success">
                                {{ session('status') }}
                            </div>
                            @endif

                            <form method="POST" action="{{ route('login') }}" class="p-4 pb-0 vh-100 d-flex justify-content-between flex-column">
                                @csrf

                                <div class="mb-4 text-center auth-logo">
                                    <img src="{{ asset('assets/img/logo.svg') }}" class="img-fluid" alt="Logo">
                                </div>

                                <div>

                                    <div class="mb-3">
                                        <h3 class="mb-2">Sign In</h3>
                                        <p class="mb-0">
                                            Access the CRMS panel using your email and passcode.
                                        </p>
                                    </div>

                                    <!-- Email -->
                                    <div class="mb-3">
                                        <label class="form-label">Email Address</label>
                                        <div class="input-group input-group-flat">
                                            <input type="email" name="email" value="{{ old('email') }}" class="form-control @error('email') is-invalid @enderror" required autofocus>

                                            <span class="input-group-text">
                                                <i class="ti ti-mail"></i>
                                            </span>
                                        </div>

                                        @error('email')
                                        <div class="invalid-feedback d-block">
                                            {{ $message }}
                                        </div>
                                        @enderror
                                    </div>

                                    <!-- Password -->
                                    <div class="mb-3">
                                        <label class="form-label">Password</label>
                                        <div class="input-group input-group-flat pass-group">
                                            <input type="password" name="password" class="form-control @error('password') is-invalid @enderror" required>

                                            <span class="input-group-text toggle-password">
                                                <i class="ti ti-eye-off"></i>
                                            </span>
                                        </div>

                                        @error('password')
                                        <div class="invalid-feedback d-block">
                                            {{ $message }}
                                        </div>
                                        @enderror
                                    </div>

                                    <!-- Remember -->
                                    <div class="mb-3 d-flex align-items-center justify-content-between">
                                        <div class="form-check">
                                            <input class="form-check-input" type="checkbox" name="remember" id="remember">
                                            <label class="form-check-label" for="remember">
                                                Remember Me
                                            </label>
                                        </div>

                                        @if (Route::has('password.request'))
                                        <a href="{{ route('password.request') }}" class="link-danger fw-medium">
                                            Forgot Password?
                                        </a>
                                        @endif
                                    </div>

                                    <!-- Button -->
                                    <div class="mb-3">
                                        <button type="submit" class="btn btn-primary w-100">
                                            Sign In
                                        </button>
                                    </div>

                                </div>

                                <div class="pb-4 text-center">
                                    <p class="mb-0 text-dark">
                                        © {{ date('Y') }} - CRMS
                                    </p>
                                </div>

                            </form>

                        </div>
                    </div>
                </div>

                <!-- Right Side Background -->
                <div class="col-lg-6 account-bg-01"></div>

            </div>
        </div>
    </div>

</x-guest-layout>
