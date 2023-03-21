<x-layouts.app>


    <x-slot:title>
        <h1>

            {{ trans('global.show') }}
            {{ trans('cruds.test-car2085255194.title_singular') }}
        </h1>

    </x-slot:title>

    @livewire('test-car2085255194.show', ['testCar2085255194' => $testCar2085255194])

</x-layouts.app>