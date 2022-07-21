<x-guest-layout>
    {{-- <x-jet-authentication-card>
        <x-slot name="logo">
            <x-jet-authentication-card-logo />
        </x-slot>

        <x-jet-validation-errors class="mb-4" /> --}}
        <section class="vh-100 gradient-custom">
            <div class="container py-5 h-100">
                <div class="row d-flex justify-content-center align-items-center h-100">
                    <div class="col-12 col-md-8 col-lg-6 col-xl-5">
                        <div class="card bg-dark text-white" style="border-radius: 1rem;">
                            <div class="card-body p-5 text-center">
                                <div class="mb-md-5 mt-md-4 pb-5">

        <form method="POST" action="{{ route('register') }}">
            @csrf
            <h2 class="fw-bold mb-2 text-uppercase">Register</h2>
            <p class="text-white-50 mb-5">Please enter your information to create account!</p>
            <div class="form-outline form-white mb-4">
                <x-jet-label for="name" class="form-label fw-bold mb-2" value="{{ __('Name') }}" />
                <x-jet-input id="name" class="form-control form-control-lg" type="text" name="name" :value="old('name')" placeholder="Enter your name" required autofocus autocomplete="name" />
            </div>

            <div class="form-outline form-white mb-4">
                <x-jet-label for="email" class="form-label fw-bold mb-2" value="{{ __('Email') }}" />
                <x-jet-input id="email" class="form-control form-control-lg" placeholder="Enter your email address" type="email" name="email" :value="old('email')" required />
            </div>

            <div class="form-outline form-white mb-4">
                <x-jet-label class="form-label fw-bold mb-2" for="password" value="{{ __('Password') }}" />
                <x-jet-input id="password" class="form-control form-control-lg" type="password" name="password" placeholder="Enter a password" required autocomplete="new-password" />
            </div>

            <div class="form-outline form-white mb-4">
                <x-jet-label for="password_confirmation" class="form-label fw-bold mb-2" value="{{ __('Confirm Password') }}" />
                <x-jet-input id="password_confirmation" class="form-control form-control-lg" type="password" placeholder="Confirm your password" name="password_confirmation" required autocomplete="new-password" />
            </div>

            @if (Laravel\Jetstream\Jetstream::hasTermsAndPrivacyPolicyFeature())
                <div class="mt-4">
                    <x-jet-label for="terms">
                        <div class="flex items-center">
                            <x-jet-checkbox name="terms" id="terms"/>

                            <div class="ml-2">
                                {!! __('I agree to the :terms_of_service and :privacy_policy', [
                                        'terms_of_service' => '<a target="_blank" href="'.route('terms.show').'" class="underline text-sm text-gray-600 hover:text-gray-900">'.__('Terms of Service').'</a>',
                                        'privacy_policy' => '<a target="_blank" href="'.route('policy.show').'" class="underline text-sm text-gray-600 hover:text-gray-900">'.__('Privacy Policy').'</a>',
                                ]) !!}
                            </div>
                        </div>
                    </x-jet-label>
                </div>
            @endif

            <div class="flex items-center justify-end mt-4">
                <a class="underline text-sm text-gray-600 hover:text-gray-900" href="{{ route('login') }}">
                    {{ __('Already registered?') }}
                </a>

                <x-jet-button class="btn btn-outline-success btn-lg px-5">
                    {{ __('Register') }}
                </x-jet-button>
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
