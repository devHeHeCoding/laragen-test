<x-layouts.app>


    <x-slot:title>
        <h1>

            {{ trans('global.show') }}
            {{ trans('cruds.test-car1520283344.title_singular') }}
        </h1>

    </x-slot:title>

    @livewire('namespace.test.show', ['testCar1520283344' => $testCar1520283344])

</x-layouts.app>