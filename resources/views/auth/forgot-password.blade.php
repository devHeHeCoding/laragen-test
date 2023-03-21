<x-layouts.guest xmlns:x-laragen="http://www.w3.org/1999/html">
    <x-auth.card>
        <div class="mb-4 text-sm text-gray-600">
            {{ __('Forgot your password? No problem. Just let us know your email address and we will email you a password reset link that will allow you to choose a new one.') }}
        </div>

        <x-auth.inline-status-notification/>

        <x-laragen::form action="{{ route('password.email') }}">

            <!-- Email Address -->
            <x-laragen::input.group
                label="Email"
                for="email"
                required
                :errors="$errors->get('email')"
            >

                <x-laragen::input.text
                    type="email"
                    required
                    autofocus
                    :value="old('email')"
                    name="email"
                    placeholder="Email"
                />

            </x-laragen::input.group>


            <div class="flex items-center justify-end mt-4">
                <x-laragen::button href="{{ route('login.show') }}" variant="text" class="mr-2">
                    {{ __('Login') }}
                </x-laragen::button>

                <x-laragen::button>
                    {{ __('Email Password Reset Link') }}
                </x-laragen::button>
            </div>
        </x-laragen::form>
    </x-auth.card>
</x-layouts.guest>
