<x-layouts.app>


    <x-slot:title>
        <h1>

            {{ trans('global.show') }}
            {{ trans('cruds.test-car1896063117.title_singular') }}
        </h1>

    </x-slot:title>

    @livewire('test-car1896063117.show', ['testCar1896063117' => $testCar1896063117])

</x-layouts.app>