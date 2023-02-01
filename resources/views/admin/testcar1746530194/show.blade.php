<x-layouts.app>


    <x-slot:title>
        <h1>

            {{ trans('global.show') }}
            {{ trans('cruds.test-car1746530194.title_singular') }}
        </h1>

    </x-slot:title>

    @livewire('test-car1746530194.show', ['testCar1746530194' => $testCar1746530194])

</x-layouts.app>