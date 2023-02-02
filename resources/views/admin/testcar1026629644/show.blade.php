<x-layouts.app>


    <x-slot:title>
        <h1>

            {{ trans('global.show') }}
            {{ trans('cruds.test-car1026629644.title_singular') }}
        </h1>

    </x-slot:title>

    @livewire('test-car1026629644.show', ['testCar1026629644' => $testCar1026629644])

</x-layouts.app>