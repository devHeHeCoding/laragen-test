<x-layouts.guest>
    <x-auth.card>

        <x-auth.inline-status-notification/>

        <x-laragen::form action="{{ route('login.store') }}">

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

            <x-laragen::input.group
                label="Remember me"
                for="remember_me"
                :errors="$errors->get('remember_me')"
            >

                <x-laragen::input.checkbox
                    name="remember_me"
                />

            </x-laragen::input.group>


            <div class="flex items-center justify-end mt-4">
                @if (Route::has('password.request'))

                    <a href="{{ route('password.request') }}">
                        {{ __('Forgot your password?') }}
                    </a>
                @endif

                <x-laragen::button class="ml-3">
                    {{ __('Log in') }}
                </x-laragen::button>

            </div>
        </x-laragen::form>
    </x-auth.card>
</x-layouts.guest>
