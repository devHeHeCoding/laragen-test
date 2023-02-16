<x-layouts.app>

    <x-slot:title>    <h1>
        {{ trans('global.edit') }}
        {{ trans('cruds.test-car1906489997.title_singular') }}    </h1>
    </x-slot:title>
    @livewire('test-car1906489997.edit', ['testCar1906489997' => $testCar1906489997])

</x-layouts.app>