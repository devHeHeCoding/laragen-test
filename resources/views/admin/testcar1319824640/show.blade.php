<x-layouts.app>


    <x-slot:title>
        <h1>

            {{ trans('global.show') }}
            {{ trans('cruds.test-car1319824640.title_singular') }}
        </h1>

    </x-slot:title>

    @livewire('test-car1319824640.show', ['testCar1319824640' => $testCar1319824640])

</x-layouts.app>