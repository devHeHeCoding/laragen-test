<x-layouts.app>

    <x-slot:title>    <h1>
        {{ trans('global.edit') }}
        {{ trans('cruds.test-car1388237257.title_singular') }}    </h1>
    </x-slot:title>
    @livewire('test-car1388237257.edit', ['testCar1388237257' => $testCar1388237257])

</x-layouts.app>