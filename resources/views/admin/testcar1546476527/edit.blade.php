<x-layouts.app>

    <x-slot:title>    <h1>
        {{ trans('global.edit') }}
        {{ trans('cruds.test-car1546476527.title_singular') }}    </h1>
    </x-slot:title>
    @livewire('test-car1546476527.edit', ['testCar1546476527' => $testCar1546476527])

</x-layouts.app>