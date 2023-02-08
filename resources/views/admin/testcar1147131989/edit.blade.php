<x-layouts.app>

    <x-slot:title>    <h1>
        {{ trans('global.edit') }}
        {{ trans('cruds.test-car1147131989.title_singular') }}    </h1>
    </x-slot:title>
    @livewire('test-car1147131989.edit', ['testCar1147131989' => $testCar1147131989])

</x-layouts.app>