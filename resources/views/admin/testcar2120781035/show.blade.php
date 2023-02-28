<x-layouts.app>


    <x-slot:title>
        <h1>

            {{ trans('global.show') }}
            {{ trans('cruds.test-car2120781035.title_singular') }}
        </h1>

    </x-slot:title>

    @livewire('test-car2120781035.show', ['testCar2120781035' => $testCar2120781035])

</x-layouts.app>