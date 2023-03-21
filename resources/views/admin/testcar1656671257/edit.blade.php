<x-layouts.app>

    <x-slot:title>    <h1>
        {{ trans('global.edit') }}
        {{ trans('cruds.test-car1656671257.title_singular') }}    </h1>
    </x-slot:title>
    @livewire('test-car1656671257.edit', ['testCar1656671257' => $testCar1656671257])

</x-layouts.app>