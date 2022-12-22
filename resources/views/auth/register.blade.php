<x-layouts.guest>
    <x-auth.card>

        <form method="POST" action="{{ route('register.store') }}">
            @csrf

            <!-- Name -->
            <x-form.form-input
                label="Name"
                placeholder="John Doe"
                name="name"
                value="{{old('name')}}"
            />

            <!-- Name -->
            <x-form.form-input
                label="Email"
                placeholder="john.doe@email.com"
                name="email"
                type="email"
                value="{{old('email')}}"
            />


            <!-- Password -->
            <x-form.form-input
                label="Password"
                placeholder="Password"
                name="password"
                type="password"
            />

            <!-- Confirm Password -->
            <x-form.form-input
                label="Confirm Password"
                placeholder="Confirm Password"
                name="password_confirmation"
                type="password"
            />

            <div class="flex items-center justify-end mt-4">
                <a class="underline text-sm text-gray-600 hover:text-gray-900 rounded-md focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-indigo-500" href="{{ route('login.show') }}">
                    {{ __('Already registered?') }}
                </a>

                <x-primary-button class="ml-4">
                    {{ __('Register') }}
                </x-primary-button>
            </div>
        </form>
    </x-auth.card>
</x-layouts.guest>
