<x-layouts.app>


    <x-slot:title>
        <h1>

            {{ trans('global.show') }}
            {{ trans('cruds.test-car1331040511.title_singular') }}
        </h1>

    </x-slot:title>

    @livewire('test-car1331040511.show', ['testCar1331040511' => $testCar1331040511])

</x-layouts.app>