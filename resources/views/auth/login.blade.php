<x-layouts.guest>
    <x-auth.card>

        <x-auth.inline-status-notification/>

        <form method="POST" action="{{ route('login.store') }}" novalidate>
            @csrf

            <x-laragen::input.group
                label="Email"
                for="email"
                required
                :errors="$errors->get('email')"
            >

                <x-laragen::input.text
                    placeholder="john.doe@email.com"
                    name="email"
                    type="email"
                    value="{{old('email')}}"
                />

            </x-laragen::input.group>

            <x-laragen::input.group
                label="Password"
                required
                for="password"
                :errors="$errors->get('email')"
            >

                <x-laragen::input.text
                    placeholder="Password"
                    name="password"
                    type="password"
                />

            </x-laragen::input.group>


            <!-- Remember Me -->
            <div class="block mt-4">
                <label for="remember_me" class="inline-flex items-center">
                    <input id="remember_me" type="checkbox"
                           class="rounded border-gray-300 text-indigo-600 shadow-sm focus:ring-indigo-500"
                           name="remember">
                    <span class="ml-2 text-sm text-gray-600">{{ __('Remember me') }}</span>
                </label>
            </div>

            <div class="flex items-center justify-end mt-4">
                @if (Route::has('password.request'))
                    <a href="{{ route('password.request') }}">
                        {{ __('Forgot your password?') }}
                    </a>
                @endif

                <x-primary-button class="ml-3">
                    {{ __('Log in') }}
                </x-primary-button>
            </div>
        </form>
    </x-auth.card>
</x-layouts.guest>
