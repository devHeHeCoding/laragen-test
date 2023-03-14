<x-layouts.app>


    <x-slot:title>
        <h1>

            {{ trans('global.show') }}
            {{ trans('cruds.test-car1844893232.title_singular') }}
        </h1>

    </x-slot:title>

    @livewire('test-car1844893232.show', ['testCar1844893232' => $testCar1844893232])

</x-layouts.app>