<x-layouts.app>

    <x-slot:title>    <h1>
        {{ trans('global.edit') }}
        {{ trans('cruds.test-car1186187951.title_singular') }}    </h1>
    </x-slot:title>
    @livewire('test-car1186187951.edit', ['testCar1186187951' => $testCar1186187951])

</x-layouts.app>