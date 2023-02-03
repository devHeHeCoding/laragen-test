<x-layouts.app>


    <x-slot:title>
        <h1>

            {{ trans('global.show') }}
            {{ trans('cruds.test-car1965271382.title_singular') }}
        </h1>

    </x-slot:title>

    @livewire('test-car1965271382.show', ['testCar1965271382' => $testCar1965271382])

</x-layouts.app>