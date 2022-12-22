<x-layouts.guest>
    <x-auth.card>

        <form method="POST" action="{{ route('password.store') }}">
            @csrf

            <!-- Password Reset Token -->
            <input type="hidden" name="token" value="{{ $request->route('token') }}">

            <!-- Email Address -->
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
                <x-primary-button>
                    {{ __('Reset Password') }}
                </x-primary-button>
            </div>
        </form>
    </x-auth.card>
</x-layouts.guest>
