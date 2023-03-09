<x-layouts.app>


    <x-slot:title>
        <h1>

            {{ trans('global.show') }}
            {{ trans('cruds.test-car1400889639.title_singular') }}
        </h1>

    </x-slot:title>

    @livewire('test-car1400889639.show', ['testCar1400889639' => $testCar1400889639])

</x-layouts.app>