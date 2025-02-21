<x-guest-layout>
    <div class="flex min-h-screen items-center justify-center bg-gray-100 px-6 py-12">
        <div class="w-full max-w-md bg-white p-8 rounded-lg shadow-lg">
            <!-- Logo -->
            <div class="flex justify-center mb-6">
                <x-application-logo class="w-16 h-16" />
            </div>

            <!-- Session Status -->
            <x-auth-session-status class="mb-4" :status="session('status')" />

            <form method="POST" action="{{ route('login') }}">
                @csrf

                <!-- Email Address -->
                <div>
                    <x-input-label for="email" :value="__('Email')" class="font-semibold text-gray-700" />
                    <x-text-input id="email" class="block mt-1 w-full p-3 border border-gray-300 rounded-lg shadow-sm focus:ring-indigo-500" type="email" name="email" :value="old('email')" required autofocus autocomplete="username" />
                    <x-input-error :messages="$errors->get('email')" class="mt-2" />
                </div>

                <!-- Password -->
                <div class="mt-4">
                    <x-input-label for="password" :value="__('Password')" class="font-semibold text-gray-700" />
                    <x-text-input id="password" class="block mt-1 w-full p-3 border border-gray-300 rounded-lg shadow-sm focus:ring-indigo-500" type="password" name="password" required autocomplete="current-password" />
                    <x-input-error :messages="$errors->get('password')" class="mt-2" />
                </div>

                <!-- Remember Me -->
                <div class="flex items-center justify-between mt-4">
                    <label for="remember_me" class="flex items-center">
                        <input id="remember_me" type="checkbox" class="rounded border-gray-300 text-indigo-600 shadow-sm focus:ring-indigo-500" name="remember">
                        <span class="ml-2 text-sm text-gray-600">{{ __('Remember me') }}</span>
                    </label>
                    @if (Route::has('password.request'))
                        <a class="text-sm text-indigo-600 hover:underline" href="{{ route('password.request') }}">
                            {{ __('Forgot password?') }}
                        </a>
                    @endif
                </div>

                <div class="mt-6 flex flex-col items-center text-center">
                    <x-primary-button class="w-full py-3 text-lg flex justify-center">
                        {{ __('Log in') }}
                    </x-primary-button>
                    
                    @if (Route::has('register'))
                        <p class="mt-4 text-sm text-gray-600">
                            {{ __('Don\'t have an account?') }}
                            <a href="{{ route('register') }}" class="text-indigo-600 hover:underline">
                                {{ __('Register here') }}
                            </a>
                        </p>
                    @endif
                </div>
            </form>
        </div>
    </div>
</x-guest-layout>
