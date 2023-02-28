<x-layouts.app>


    <x-slot:title>
        <h1>

            {{ trans('global.show') }}
            {{ trans('cruds.test-car2069207647.title_singular') }}
        </h1>

    </x-slot:title>

    @livewire('test-car2069207647.show', ['testCar2069207647' => $testCar2069207647])

</x-layouts.app>