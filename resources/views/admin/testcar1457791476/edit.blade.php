<x-layouts.app>

    <x-slot:title>    <h1>
        {{ trans('global.edit') }}
        {{ trans('cruds.test-car1457791476.title_singular') }}    </h1>
    </x-slot:title>
    @livewire('test-car1457791476.edit', ['testCar1457791476' => $testCar1457791476])

</x-layouts.app>