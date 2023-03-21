<x-layouts.app>


    <x-slot:title>
        <h1>

            {{ trans('global.show') }}
            {{ trans('cruds.test-car2093887144.title_singular') }}
        </h1>

    </x-slot:title>

    @livewire('test-car2093887144.show', ['testCar2093887144' => $testCar2093887144])

</x-layouts.app>