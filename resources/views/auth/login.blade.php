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

        <!-- Divider and "or" text -->
        <div class="flex items-center justify-center mt-4">
            <div class="w-full border-t border-gray-300 my-2"></div>
            <span class="text-sm text-gray-600 mx-2">or</span>
            <div class="w-full border-t border-gray-300 my-2"></div>
        </div>

        <!-- "Login with Google" button -->
        <div class="flex items-center justify-center mt-4">
            <a href="{{ route('login.google') }}" class="flex items-center text-sm text-gray-600 hover:text-gray-900 rounded-md focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-indigo-500 bg-white p-2 border border-gray-300">
                <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-google" viewBox="0 0 16 16">
                    <path d="M15.545 6.558a9.42 9.42 0 0 1 .139 1.626c0 2.434-.87 4.492-2.384 5.885h.002C11.978 15.292 10.158 16 8 16A8 8 0 1 1 8 0a7.689 7.689 0 0 1 5.352 2.082l-2.284 2.284A4.347 4.347 0 0 0 8 3.166c-2.087 0-3.86 1.408-4.492 3.304a4.792 4.792 0 0 0 0 3.063h.003c.635 1.893 2.405 3.301 4.492 3.301 1.078 0 2.004-.276 2.722-.764h-.003a3.702 3.702 0 0 0 1.599-2.431H8v-3.08h7.545z" />
                </svg>
                <span class="ml-2">Login with Google</span>
            </a>
        </div>
    </x-authentication-card>
</x-guest-layout>