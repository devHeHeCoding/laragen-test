<x-layouts.app>


    <x-slot:title>
        <h1>

            {{ trans('global.show') }}
            {{ trans('cruds.test-car1243674150.title_singular') }}
        </h1>

    </x-slot:title>

    @livewire('test-car1243674150.show', ['testCar1243674150' => $testCar1243674150])

</x-layouts.app>