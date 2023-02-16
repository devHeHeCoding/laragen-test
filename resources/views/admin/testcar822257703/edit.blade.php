<x-layouts.app>

    <x-slot:title>    <h1>
        {{ trans('global.edit') }}
        {{ trans('cruds.test-car822257703.title_singular') }}    </h1>
    </x-slot:title>
    @livewire('test-car822257703.edit', ['testCar822257703' => $testCar822257703])

</x-layouts.app>