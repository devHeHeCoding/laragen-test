<x-layouts.app>

    <x-slot:title>    <h1>
        {{ trans('global.edit') }}
        {{ trans('cruds.test-car2085255194.title_singular') }}    </h1>
    </x-slot:title>
    @livewire('test-car2085255194.edit', ['testCar2085255194' => $testCar2085255194])

</x-layouts.app>