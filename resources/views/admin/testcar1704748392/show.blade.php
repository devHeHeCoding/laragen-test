<x-layouts.app>


    <x-slot:title>
        <h1>

            {{ trans('global.show') }}
            {{ trans('cruds.test-car1704748392.title_singular') }}
        </h1>

    </x-slot:title>

    @livewire('test-car1704748392.show', ['testCar1704748392' => $testCar1704748392])

</x-layouts.app>