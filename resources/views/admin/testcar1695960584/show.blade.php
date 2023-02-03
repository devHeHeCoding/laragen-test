<x-layouts.app>


    <x-slot:title>
        <h1>

            {{ trans('global.show') }}
            {{ trans('cruds.test-car1695960584.title_singular') }}
        </h1>

    </x-slot:title>

    @livewire('test-car1695960584.show', ['testCar1695960584' => $testCar1695960584])

</x-layouts.app>