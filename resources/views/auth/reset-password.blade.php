<x-layouts.guest>
    <x-auth.card>

        <x-laragen::form action="{{ route('password.store') }}">

            <!-- Password Reset Token -->
            <input type="hidden" name="token" value="{{ $request->route('token') }}">

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
                label="Confirm Password"
                required
                for="password_confirmation"
                :errors="$errors->get('email')"
            >

                <x-laragen::input.text
                    placeholder="Confirm Password"
                    name="password_confirmation"
                    type="password"
                />

            </x-laragen::input.group>

            <div class="flex items-center justify-end mt-4">
                <x-laragen::button>
                    {{ __('Reset Password') }}
                </x-laragen::button>
            </div>
        </x-laragen::form>
    </x-auth.card>
</x-layouts.guest>
