<x-layouts.app>


    <x-slot:title>
        <h1>

            {{ trans('global.show') }}
            {{ trans('cruds.test-car1546476527.title_singular') }}
        </h1>

    </x-slot:title>

    @livewire('test-car1546476527.show', ['testCar1546476527' => $testCar1546476527])

</x-layouts.app>