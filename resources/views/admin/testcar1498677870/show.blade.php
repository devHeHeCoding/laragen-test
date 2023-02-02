<x-layouts.app>


    <x-slot:title>
        <h1>

            {{ trans('global.show') }}
            {{ trans('cruds.test-car1498677870.title_singular') }}
        </h1>

    </x-slot:title>

    @livewire('test-car1498677870.show', ['testCar1498677870' => $testCar1498677870])

</x-layouts.app>