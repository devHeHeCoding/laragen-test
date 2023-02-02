<x-layouts.app>

    <x-slot:title>    <h1>
        {{ trans('global.edit') }}
        {{ trans('cruds.test-car1026629644.title_singular') }}    </h1>
    </x-slot:title>
    @livewire('test-car1026629644.edit', ['testCar1026629644' => $testCar1026629644])

</x-layouts.app>