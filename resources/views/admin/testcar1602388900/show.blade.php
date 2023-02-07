<x-layouts.app>


    <x-slot:title>
        <h1>

            {{ trans('global.show') }}
            {{ trans('cruds.test-car1602388900.title_singular') }}
        </h1>

    </x-slot:title>

    @livewire('test-car1602388900.show', ['testCar1602388900' => $testCar1602388900])

</x-layouts.app>