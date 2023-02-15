<x-layouts.app>

    <x-slot:title>    <h1>
        {{ trans('global.edit') }}
        {{ trans('cruds.test-car1305333820.title_singular') }}    </h1>
    </x-slot:title>
    @livewire('test-car1305333820.edit', ['testCar1305333820' => $testCar1305333820])

</x-layouts.app>