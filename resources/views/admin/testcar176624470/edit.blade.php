<x-layouts.app>

    <x-slot:title>    <h1>
        {{ trans('global.edit') }}
        {{ trans('cruds.test-car176624470.title_singular') }}    </h1>
    </x-slot:title>
    @livewire('test-car176624470.edit', ['testCar176624470' => $testCar176624470])

</x-layouts.app>