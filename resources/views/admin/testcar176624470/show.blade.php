<x-layouts.app>


    <x-slot:title>
        <h1>

            {{ trans('global.show') }}
            {{ trans('cruds.test-car176624470.title_singular') }}
        </h1>

    </x-slot:title>

    @livewire('test-car176624470.show', ['testCar176624470' => $testCar176624470])

</x-layouts.app>