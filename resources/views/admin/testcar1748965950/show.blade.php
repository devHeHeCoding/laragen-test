<x-layouts.app>


    <x-slot:title>
        <h1>

            {{ trans('global.show') }}
            {{ trans('cruds.test-car1748965950.title_singular') }}
        </h1>

    </x-slot:title>

    @livewire('test-car1748965950.show', ['testCar1748965950' => $testCar1748965950])

</x-layouts.app>