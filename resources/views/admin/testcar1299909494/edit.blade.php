<x-layouts.app>

    <x-slot:title>    <h1>
        {{ trans('global.edit') }}
        {{ trans('cruds.test-car1299909494.title_singular') }}    </h1>
    </x-slot:title>
    @livewire('test-car1299909494.edit', ['testCar1299909494' => $testCar1299909494])

</x-layouts.app>