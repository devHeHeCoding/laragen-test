<x-layouts.app>

    <x-slot:title>    <h1>
        {{ trans('global.edit') }}
        {{ trans('cruds.test-car1189261820.title_singular') }}    </h1>
    </x-slot:title>
    @livewire('test-car1189261820.edit', ['testCar1189261820' => $testCar1189261820])

</x-layouts.app>