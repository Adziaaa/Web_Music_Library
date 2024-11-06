<section>
    <header>
        <h2 class="text-lg font-medium text-gray-900 dark:text-gray-100">
            {{ __('Profile Information') }}
        </h2>

        <p class="mt-1 text-sm text-gray-600 dark:text-gray-400">
            {{ __("Update your account's profile information.") }}
        </p>
    </header>

    <form id="send-verification" method="post" action="{{ route('verification.send') }}">
        @csrf
    </form>

    <form method="post" action="{{ route('profile.update') }}" class="mt-6 space-y-6">
        @csrf
        @method('patch')

        <div>
            <x-input-label for="name" :value="__('Name')" />
            <x-text-input id="name" name="name" type="text" class="mt-1 block w-full" :value="old('name', $user->name)" required autofocus autocomplete="name" />
            <x-input-error class="mt-2" :messages="$errors->get('name')" />
        </div>

        <div>
            <x-input-label for="email" :value="__('Email')" />
            <x-text-input id="email" name="email" type="email" class="mt-1 block w-full" :value="old('email', $user->email)" required autocomplete="username" />
            <x-input-error class="mt-2" :messages="$errors->get('email')" />

            @if ($user instanceof \Illuminate\Contracts\Auth\MustVerifyEmail && ! $user->hasVerifiedEmail())
                <div>
                    <p class="text-sm mt-2 text-gray-800 dark:text-gray-200">
                        {{ __('Your email address is unverified.') }}

                        <button form="send-verification" class="underline text-sm text-gray-600 dark:text-gray-400 hover:text-gray-900 dark:hover:text-gray-100 rounded-md focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-indigo-500 dark:focus:ring-offset-gray-800">
                            {{ __('Click here to re-send the verification email.') }}
                        </button>
                    </p>

                    @if (session('status') === 'verification-link-sent')
                        <p class="mt-2 font-medium text-sm text-green-600 dark:text-green-400">
                            {{ __('A new verification link has been sent to your email address.') }}
                        </p>
                    @endif
                </div>
            @endif
        </div>

        <div>
            <x-input-label for="description" :value="__('Description')" />
            <x-text-input id="description" name="description" type="text" class="mt-1 block w-full pb-8" :value="old('description', $user->description)" autofocus autocomplete="description" placeholder="Music enthusiast and artist follower." />
            <x-input-error class="mt-2" :messages="$errors->get('description')" />
        </div>

        <div>
            <x-input-label for="created_at" :value="__('User Since')" />
            <x-text-input id="created_at" name="created_at" type="text" class="mt-1 block w-full bg-gray-100 text-gray-500 cursor-not-allowed" :value="old('created_at', $user->created_at->format('F j, Y'))" readonly />
        </div>

        <div>
            <x-input-label for="language" :value="__('Language')" />
            <div class="hidden mt-2 sm:flex sm:items-center">
                <x-dropdown align="left">
                    <x-slot name="trigger">
                        <button type="button" class="inline-flex items-center px-3 py-2 border border-gray-300 dark:border-gray-700 dark:bg-gray-900 dark:text-gray-300 focus:border-indigo-500 dark:focus:border-indigo-600 focus:ring-indigo-500 dark:focus:ring-indigo-600 rounded-md shadow-sm">
                            <div>{{ Auth::user()->language }}</div>

                            <div class="ms-1">
                                <svg class="fill-current h-4 w-4" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20">
                                    <path fill-rule="evenodd" d="M5.293 7.293a1 1 0 011.414 0L10 10.586l3.293-3.293a1 1 0 111.414 1.414l-4 4a1 1 0 01-1.414 0l-4-4a1 1 0 010-1.414z" clip-rule="evenodd" />
                                </svg>
                            </div>
                        </button>
                    </x-slot>
                    <x-slot name="content">
                        <x-dropdown-link href="#" onclick="event.preventDefault(); updateLanguage('English')">English</x-dropdown-link>
                        <x-dropdown-link href="#" onclick="event.preventDefault(); updateLanguage('Spanish')">Spanish</x-dropdown-link>
                    </x-slot>
                </x-dropdown>
            </div>
            <x-input-error class="mt-2" :messages="$errors->get('language')" />
        </div>

        <div x-data="themeSwitcher" x-init="initializeTheme">
            <x-input-label for="theme" :value="__('Theme')" />
            <div class="hidden mt-2 sm:flex sm:items-center">
                <x-dropdown align="left">
                    <x-slot name="trigger">
                        <button type="button" class="inline-flex items-center px-3 py-2 border border-gray-300 dark:border-gray-700 dark:bg-gray-900 dark:text-gray-300 focus:border-indigo-500 dark:focus:border-indigo-600 focus:ring-indigo-500 dark:focus:ring-indigo-600 rounded-md shadow-sm">
                            <div x-text="themeLabel"></div>
                            <div class="ml-1">
                                <svg class="fill-current h-4 w-4" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20">
                                    <path fill-rule="evenodd" d="M5.293 7.293a1 1 0 011.414 0L10 10.586l3.293-3.293a1 1 0 111.414 1.414l-4 4a1 1 0 01-1.414 0l-4-4a1 1 0 010-1.414z" clip-rule="evenodd" />
                                </svg>
                            </div>
                        </button>
                    </x-slot>
                    <x-slot name="content">
                        <x-dropdown-link href="#" @click="setTheme('light')">{{ __('Light') }}</x-dropdown-link>
                        <x-dropdown-link href="#" @click="setTheme('dark')">{{ __('Dark') }}</x-dropdown-link>
                    </x-slot>
                </x-dropdown>
            </div>
        </div>
        
        <div>
            <div class="flex items-start">
                <div class="flex items-center h-5">
                    <input type="hidden" name="notify_on_new_song" value="0">
                    <input id="notify_on_new_song" name="notify_on_new_song" type="checkbox" value="1" class="focus:ring-indigo-500 h-4 w-4 text-indigo-600 border-gray-300 rounded" {{ old('notify_on_new_song', $user->notify_on_new_song) ? 'checked' : '' }}>
                </div>
                <div class="ml-3 text-sm">
                    <x-input-label for="notify_on_new_song" :value="__('Notify me when followed artists release new songs')" />
                </div>
            </div>
        </div>

        <div>
            <div class="flex items-start">
                <div class="flex items-center h-5">
                    <input type="hidden" name="notify_on_new_message" value="0">
                    <input id="notify_on_new_message" name="notify_on_new_message" type="checkbox" value="1" class="focus:ring-indigo-500 h-4 w-4 text-indigo-600 border-gray-300 rounded" {{ old('notify_on_new_message', $user->notify_on_new_message) ? 'checked' : '' }}>
                </div>
                <div class="ml-3 text-sm">
                    <x-input-label for="notify_on_new_message" :value="__('Notify me when followed artists post new messages')" />
                </div>
            </div>
        </div>

        <div class="flex items-center gap-4">
            <x-primary-button>{{ __('Save') }}</x-primary-button>

            @if (session('status') === 'profile-updated')
                <p
                    x-data="{ show: true }"
                    x-show="show"
                    x-transition
                    x-init="setTimeout(() => show = false, 2000)"
                    class="text-sm text-gray-600 dark:text-gray-400"
                >{{ __('Saved.') }}</p>
            @endif
        </div>
    </form>
</section>

<script>
    function updateLanguage(language) {
        const form = document.querySelector('form[action="{{ route('profile.update') }}"]');
        const languageInput = document.createElement('input');
        
        // Add hidden input to hold the language value
        languageInput.setAttribute('type', 'hidden');
        languageInput.setAttribute('name', 'language');
        languageInput.setAttribute('value', language);
        
        // Append hidden input to form and submit
        form.appendChild(languageInput);
        form.submit();
    }

    document.addEventListener('alpine:init', () => {
        Alpine.data('themeSwitcher', () => ({
            themeLabel: localStorage.getItem('theme') === 'dark' ? 'Dark' : 'Light',

            setTheme(theme) {
                // Save the theme preference in localStorage
                localStorage.setItem('theme', theme);

                // Apply theme class to the document root
                if (theme === 'dark') {
                    document.documentElement.classList.add('dark');
                } else {
                    document.documentElement.classList.remove('dark');
                }

                // Update label
                this.themeLabel = theme.charAt(0).toUpperCase() + theme.slice(1);
            },

            initializeTheme() {
                // Check localStorage for theme preference
                const theme = localStorage.getItem('theme') || 'system';
                this.setTheme(theme);
            }
        }));
    });
</script>