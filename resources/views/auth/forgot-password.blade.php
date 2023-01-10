<x-layouts.guest>
    <x-auth.card>
        <div class="mb-4 text-sm text-gray-600">
            {{ __('Forgot your password? No problem. Just let us know your email address and we will email you a password reset link that will allow you to choose a new one.') }}
        </div>

        <x-auth.inline-status-notification/>

        <form method="POST" action="{{ route('password.email') }}" novalidate>
            @csrf

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

                <a href="{{ route('login.show') }}">
                    {{ __('Login') }}
                </a>

                <x-primary-button>
                    {{ __('Email Password Reset Link') }}
                </x-primary-button>
            </div>
        </form>
    </x-auth.card>
</x-layouts.guest>
