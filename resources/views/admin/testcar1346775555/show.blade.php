<x-layouts.app>


    <x-slot:title>
        <h1>

            {{ trans('global.show') }}
            {{ trans('cruds.test-car1346775555.title_singular') }}
        </h1>

    </x-slot:title>

    @livewire('test-car1346775555.show', ['testCar1346775555' => $testCar1346775555])

</x-layouts.app>