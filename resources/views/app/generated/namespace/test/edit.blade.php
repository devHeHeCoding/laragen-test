<x-layouts.app>

    <x-slot:title>    <h1>
        {{ trans('global.edit') }}
        {{ trans('cruds.test-car1070961600.title_singular') }}    </h1>
    </x-slot:title>
    @livewire('namespace.test.edit', ['testCar1070961600' => $testCar1070961600])

</x-layouts.app>