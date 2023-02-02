<x-layouts.app>

    <x-slot:title>    <h1>
        {{ trans('global.edit') }}
        {{ trans('cruds.test-car1704748392.title_singular') }}    </h1>
    </x-slot:title>
    @livewire('test-car1704748392.edit', ['testCar1704748392' => $testCar1704748392])

</x-layouts.app>