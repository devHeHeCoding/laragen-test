<x-layouts.app>


    <x-slot:title>
        <h1>

            {{ trans('global.show') }}
            {{ trans('cruds.test-car1387258835.title_singular') }}
        </h1>

    </x-slot:title>

    @livewire('test-car1387258835.show', ['testCar1387258835' => $testCar1387258835])

</x-layouts.app>