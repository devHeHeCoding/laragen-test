<x-layouts.app>


    <x-slot:title>
        <h1>

            {{ trans('global.show') }}
            {{ trans('cruds.test-car313949386.title_singular') }}
        </h1>

    </x-slot:title>

    @livewire('test-car313949386.show', ['testCar313949386' => $testCar313949386])

</x-layouts.app>