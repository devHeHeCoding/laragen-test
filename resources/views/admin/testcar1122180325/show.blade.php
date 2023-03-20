<x-layouts.app>


    <x-slot:title>
        <h1>

            {{ trans('global.show') }}
            {{ trans('cruds.test-car1122180325.title_singular') }}
        </h1>

    </x-slot:title>

    @livewire('test-car1122180325.show', ['testCar1122180325' => $testCar1122180325])

</x-layouts.app>