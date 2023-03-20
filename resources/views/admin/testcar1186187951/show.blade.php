<x-layouts.app>


    <x-slot:title>
        <h1>

            {{ trans('global.show') }}
            {{ trans('cruds.test-car1186187951.title_singular') }}
        </h1>

    </x-slot:title>

    @livewire('test-car1186187951.show', ['testCar1186187951' => $testCar1186187951])

</x-layouts.app>