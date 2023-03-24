<x-layouts.app>


    <x-slot:title>
        <h1>

            {{ trans('global.show') }}
            {{ trans('cruds.test-car1070961600.title_singular') }}
        </h1>

    </x-slot:title>

    @livewire('namespace.test.show', ['testCar1070961600' => $testCar1070961600])

</x-layouts.app>