<x-layouts.app>

    <x-slot:title>    <h1>
        {{ trans('global.edit') }}
        {{ trans('cruds.test-car1346775555.title_singular') }}    </h1>
    </x-slot:title>
    @livewire('test-car1346775555.edit', ['testCar1346775555' => $testCar1346775555])

</x-layouts.app>