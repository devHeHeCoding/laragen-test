<x-layouts.app>

    <x-slot:title>    <h1>
        {{ trans('global.edit') }}
        {{ trans('cruds.test-car1387258835.title_singular') }}    </h1>
    </x-slot:title>
    @livewire('test-car1387258835.edit', ['testCar1387258835' => $testCar1387258835])

</x-layouts.app>