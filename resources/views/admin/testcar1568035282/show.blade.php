<x-layouts.app>


    <x-slot:title>
        <h1>

            {{ trans('global.show') }}
            {{ trans('cruds.test-car1568035282.title_singular') }}
        </h1>

    </x-slot:title>

    @livewire('test-car1568035282.show', ['testCar1568035282' => $testCar1568035282])

</x-layouts.app>