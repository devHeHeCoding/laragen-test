<x-layouts.app>


    <x-slot:title>
        <h1>

            {{ trans('global.show') }}
            {{ trans('cruds.test-car1457791476.title_singular') }}
        </h1>

    </x-slot:title>

    @livewire('test-car1457791476.show', ['testCar1457791476' => $testCar1457791476])

</x-layouts.app>