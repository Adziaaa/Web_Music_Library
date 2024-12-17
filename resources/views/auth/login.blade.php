<x-guest-layout>
    <!-- Session Status -->
    <x-auth-session-status class="mb-4" :status="session('status')" />

    <form method="POST" action="{{ route('login') }}">
        @csrf

        <!-- Email Address -->
        <div>
            <x-input-label for="email" :value="__('Email')" />
            <x-text-input id="email" class="block mt-1 w-full" type="email" name="email" :value="old('email')" required autofocus autocomplete="username" />
            <x-input-error :messages="$errors->get('email')" class="mt-2" />
        </div>

        <!-- Password -->
        <div class="mt-4">
            <x-input-label for="password" :value="__('Password')" />

            <x-text-input id="password" class="block mt-1 w-full"
                            type="password"
                            name="password"
                            required autocomplete="current-password" />

            <x-input-error :messages="$errors->get('password')" class="mt-2" />
        </div>

        <!-- Remember Me -->
        <div class="block mt-4">
            <label for="remember_me" class="inline-flex items-center">
                <input id="remember_me" type="checkbox" class="rounded dark:bg-gray-900 border-gray-300 dark:border-gray-700 text-indigo-600 shadow-sm focus:ring-indigo-500 dark:focus:ring-indigo-600 dark:focus:ring-offset-gray-800" name="remember">
                <span class="ms-2 text-sm text-gray-600 dark:text-gray-400">{{ __('Remember me') }}</span>
            </label>
        </div>

<<<<<<< HEAD
=======

        <!-- CAPTCHA -->
        @if (RateLimiter::attempts(request()->ip()) >= 3)
            <div class="form-group mt-4">
                {!! NoCaptcha::renderJs() !!}
                {!! NoCaptcha::display() !!}
                @error('g-recaptcha-response')
                    <span class="text-danger">{{ $message }}</span>
                @enderror
            </div>
        @endif

>>>>>>> 3de4682 (Daniel Extension. DDOS DOS Bot protection)
        <div class="flex items-center justify-center mt-4">
            @if (Route::has('password.request'))
                <a class=" underline text-sm text-gray-600 dark:text-gray-400 hover:text-gray-900 dark:hover:text-gray-100 rounded-md focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-indigo-500 dark:focus:ring-offset-gray-800" href="{{ route('password.request') }}">
                    {{ __('Forgot your password?') }}
                </a>
            @endif

            <x-primary-button class="ms-3">
            <a href="{{ route('register') }}" >
                {{ __('Sign up') }}
            </x-primary-button>

            <x-primary-button class="ms-3">
                {{ __('Log in') }}
            </x-primary-button>


        </div>
    </form>

    <!-- Login as GUEST -->
    <form method="GET" action="{{ route('guest.login') }}" class=" mt-4 flex justify-center ">
        <x-primary-button class="ml-2 mr-2 btn btn-secondary w-full max-w-xs items-center justify-center">
            {{ __('Log in as GUEST') }}
        </x-primary-button>
        <div class="mt-4"><br></div>
    </form>

<<<<<<< HEAD
=======
    <!-- Countdown Timer JavaScript -->
    @if (session('timeLeft'))
        <script>
            let timeLeft = {{ session('timeLeft') }};
            const countdownElement = document.getElementById('countdown');
            const interval = setInterval(() => {
                if (timeLeft > 0) {
                    timeLeft--;
                    countdownElement.textContent = timeLeft;
                }
                if (timeLeft === 0) {
                    clearInterval(interval);
                    document.getElementById('timeLeftContainer').style.display = 'none';
                }
            }, 1000);
        </script>
        <div id="timeLeftContainer">
            Time left: <span id="countdown"></span> seconds
        </div>
    @endif

>>>>>>> 3de4682 (Daniel Extension. DDOS DOS Bot protection)

</x-guest-layout>