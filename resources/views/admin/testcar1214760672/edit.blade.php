<x-layouts.app>

    <x-slot:title>    <h1>
        {{ trans('global.edit') }}
        {{ trans('cruds.test-car1214760672.title_singular') }}    </h1>
    </x-slot:title>
    @livewire('test-car1214760672.edit', ['testCar1214760672' => $testCar1214760672])

</x-layouts.app>