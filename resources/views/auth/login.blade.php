<x-guest-layout>

    @section('title') {{'Login'}} @endsection
    <x-authentication-card>
        <!-- Change the logo by replacing x-authentication-card-logo component -->
        <x-slot name="logo">
            <img src="{{ asset('/image/foodlogo.png') }}" width="100" height="100" alt="Custom Logo">
        </x-slot>

        <x-validation-errors class="mb-4" />

        @if (session('status'))
        <div class="mb-4 font-medium text-sm text-green-600">
            {{ session('status') }}
        </div>
        @endif

        <!-- Modify the form as needed -->
        <form method="POST" action="{{ route('login') }}">
            @csrf

            <div>
                <x-label for="email" value="{{ __('Email') }}" />
                <x-input id="email" class="block mt-1 w-full" type="email" name="email" :value="old('email')" required autofocus autocomplete="username" />
            </div>

            <div class="mt-4">
                <x-label for="password" value="{{ __('Password') }}" />
                <x-input id="password" class="block mt-1 w-full" type="password" name="password" required autocomplete="current-password" />
            </div>

            <div class="block mt-4">
                @if (Route::has('password.request'))
                <a class="underline text-sm text-gray-600 hover:text-gray-900 rounded-md focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-indigo-500" href="{{ route('password.request') }}">
                    {{ __('Forgot your password?') }}
                </a>
                @endif
            </div>

            <div class="flex items-center justify-center mt-4">

                <x-button class="ms-4 bg-custom-color hover:bg-custom-hover-color">
                    {{ __('Log in') }}
                </x-button>
            </div>
        </form>
        <div class="flex items-center justify-center mt-4">
            <a href="{{ route('register') }}" class="ml-4 hover:text-green-900">
                Don't have an account? {{ __('Sign up') }}
            </a>
        </div>

    </x-authentication-card>
</x-guest-layout>