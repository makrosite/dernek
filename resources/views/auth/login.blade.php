<x-guest-layout>
    <!-- Session Status -->
    <x-auth-session-status class="mb-4" :status="session('status')" />

    <form method="POST" action="{{ route('login') }}">
        @csrf

        <!-- Kullanıcı Adı -->
        <div>
            <x-input-label for="username" :value="__('Kullanıcı Adı')" />
            <x-text-input id="username" class="block mt-1 w-full" type="text" name="username" :value="old('username')" required autofocus autocomplete="username" />
            <x-input-error :messages="$errors->get('username')" class="mt-2" />
        </div>

        <!-- Şifre -->
        <div class="mt-4">
            <x-input-label for="password" :value="'Şifre'" />

            <x-text-input id="password" class="block mt-1 w-full"
                            type="password"
                            name="password"
                            required autocomplete="current-password" />

            <x-input-error :messages="$errors->get('password')" class="mt-2" />
        </div>

        <!-- Beni Hatırla -->
        <div class="block mt-4">
            <label for="remember_me" class="inline-flex items-center">
                <input id="remember_me" type="checkbox" class="rounded dark:bg-gray-900 border-gray-300 dark:border-gray-700 text-indigo-600 shadow-sm focus:ring-indigo-500 dark:focus:ring-indigo-600 dark:focus:ring-offset-gray-800" name="remember">
                <span class="ms-2 text-sm text-gray-600 dark:text-gray-400">Beni Hatırla</span>
            </label>
        </div>

        <div class="flex items-center justify-end mt-4">
            {{-- Şifrenizi mi unuttunuz? linki kaldırıldı --}}
            <x-primary-button class="ms-3">
                Giriş Yap
            </x-primary-button>
        </div>
    </form>
</x-guest-layout>
