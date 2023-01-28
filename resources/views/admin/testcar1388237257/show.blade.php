<x-layouts.app>


    <x-slot:title>
        <h1>

            {{ trans('global.show') }}
            {{ trans('cruds.test-car1388237257.title_singular') }}
        </h1>

    </x-slot:title>

    @livewire('test-car1388237257.show', ['testCar1388237257' => $testCar1388237257])

</x-layouts.app>