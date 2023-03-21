<x-layouts.app>


    <x-slot:title>
        <h1>

            {{ trans('global.show') }}
            {{ trans('cruds.test-car1656671257.title_singular') }}
        </h1>

    </x-slot:title>

    @livewire('test-car1656671257.show', ['testCar1656671257' => $testCar1656671257])

</x-layouts.app>