<x-layouts.app>


    <x-slot:title>
        <h1>

            {{ trans('global.show') }}
            {{ trans('cruds.test-car1302454223.title_singular') }}
        </h1>

    </x-slot:title>

    @livewire('test-car1302454223.show', ['testCar1302454223' => $testCar1302454223])

</x-layouts.app>