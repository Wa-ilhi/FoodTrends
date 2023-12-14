<x-guest-layout>
    @section('title') {{'Forgot Password'}} @endsection

    <x-authentication-card>
        <x-slot name="logo">
            <img src="{{ asset('/image/foodlogo.png') }}" width="100" height="100" alt="Custom Logo">
        </x-slot>

        <div class="mb-4 text-sm text-gray-600">
            {{ __('Provide your registered email and we will send you the reset password verification.') }}
        </div>

        @if (session('status'))
        <div class="mb-4 font-medium text-sm text-green-600">
            {{ session('status') }}
        </div>
        @endif

        <x-validation-errors class="mb-4" />

        <form method="POST" action="{{ route('password.email') }}">
            @csrf

            <div class="block">
                <x-label for="email" value="{{ __('Email') }}" />
                <x-input id="email" class="block mt-1 w-full" type="email" name="email" :value="old('email')" required autofocus autocomplete="username" />
            </div>

            <div class="flex items-center justify-end mt-4">
                <x-button>
                    {{ __('Email Password Reset Link') }}
                </x-button>
            </div>
        </form>
    </x-authentication-card>
</x-guest-layout>