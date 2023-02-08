<x-layouts.app>


    <x-slot:title>
        <h1>

            {{ trans('global.show') }}
            {{ trans('cruds.test-car1376818695.title_singular') }}
        </h1>

    </x-slot:title>

    @livewire('test-car1376818695.show', ['testCar1376818695' => $testCar1376818695])

</x-layouts.app>