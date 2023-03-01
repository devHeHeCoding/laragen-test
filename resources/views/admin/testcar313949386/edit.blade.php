<x-layouts.app>

    <x-slot:title>    <h1>
        {{ trans('global.edit') }}
        {{ trans('cruds.test-car313949386.title_singular') }}    </h1>
    </x-slot:title>
    @livewire('test-car313949386.edit', ['testCar313949386' => $testCar313949386])

</x-layouts.app>