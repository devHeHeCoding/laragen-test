<x-layouts.app>

    <x-slot:title>    <h1>
        {{ trans('global.edit') }}
        {{ trans('cruds.test-car1387683857.title_singular') }}    </h1>
    </x-slot:title>
    @livewire('test-car1387683857.edit', ['testCar1387683857' => $testCar1387683857])

</x-layouts.app>