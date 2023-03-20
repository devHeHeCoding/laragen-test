<x-layouts.app>

    <x-slot:title>    <h1>
        {{ trans('global.edit') }}
        {{ trans('cruds.test-car1122180325.title_singular') }}    </h1>
    </x-slot:title>
    @livewire('test-car1122180325.edit', ['testCar1122180325' => $testCar1122180325])

</x-layouts.app>