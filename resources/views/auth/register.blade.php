<x-layouts.guest>
    <x-auth.card>

        <x-laragen::form action="{{ route('register.store') }}">

            <x-laragen::input.group
                label="Name"
                for="name"
                required
                :errors="$errors->get('name')"
            >

                <x-laragen::input.text
                    type="email"
                    required
                    autofocus
                    :value="old('name')"
                    name="name"
                    placeholder="Name"
                />

            </x-laragen::input.group>

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
                <a class="underline text-sm text-gray-600 hover:text-gray-900 rounded-md focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-indigo-500"
                   href="{{ route('login.show') }}">
                    {{ __('Already registered?') }}
                </a>

                <x-laragen::button class="ml-4">
                    {{ __('Register') }}
                </x-laragen::button>
            </div>
        </x-laragen::form>
    </x-auth.card>
</x-layouts.guest>
