<x-guest-layout>
    {{-- <x-jet-authentication-card> --}}

    <x-jet-validation-errors class="mb-4" />

    @if (session('status'))
        <div class="mb-4 font-medium text-sm text-green-600">
            {{ session('status') }}
        </div>
    @endif

    <section class="vh-100 gradient-custom">
        <div class="container py-5 h-100">
            <div class="row d-flex justify-content-center align-items-center h-100">
                <div class="col-12 col-md-8 col-lg-6 col-xl-5">
                    <div class="card bg-dark text-white" style="border-radius: 1rem;">
                        <div class="card-body p-5 text-center">
                            <div class="mb-md-5 mt-md-4 pb-5">
                                <form method="POST" action="{{ route('login') }}">
                                    @csrf
                                    <h2 class="fw-bold mb-2 text-uppercase">Login</h2>
                                    <p class="text-white-50 mb-5">Please enter your login and password!</p>
                                    <div class="form-outline form-white mb-4">
                                        <x-jet-label for="email" class="form-label">{{ __('Email') }}</x-jet-label>
                                        <x-jet-input id="email" class="form-control form-control-lg"
                                            placeholder="Enter a valid email address" type="email" name="email"
                                            :value="old('email')" required />
                                    </div>

                                    <div class="form-outline form-white mb-4">
                                        <x-jet-label class="form-label" for="password" value="{{ __('Password') }}" />
                                        <x-jet-input id="password" class="form-control form-control-lg" type="password"
                                            name="password" placeholder="Enter password" required
                                            autocomplete="current-password" />
                                    </div>

                                    <div class="block mt-4">
                                        <label for="remember_me" class="flex items-center">
                                            <x-jet-checkbox id="remember_me" name="remember" />
                                            <span class="ml-2 text-sm text-gray-600">{{ __('Remember me') }}</span>
                                        </label>
                                    </div>

                                    <div class="flex items-center justify-end mt-4">
                                        @if (Route::has('password.request'))
                                            <a class="underline text-sm text-gray-600 hover:text-gray-900"
                                                href="{{ route('password.request') }}">
                                                {{ __('Forgot your password?') }}
                                            </a>
                                        @endif

                                        <x-jet-button class="btn btn-outline-primary btn-lg px-5">
                                            {{ __('Log in') }}
                                        </x-jet-button>
                                    </div>
                            </div>
                            <div>
                                <p class="mb-0">Don't have an account? <a href="{{ route('register') }}"
                                        class="text-white-50 fw-bold">Sign Up</a>
                                </p>
                            </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    {{-- </x-jet-authentication-card> --}}

</x-guest-layout>
