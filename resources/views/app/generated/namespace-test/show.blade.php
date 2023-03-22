<x-layouts.app>


    <x-slot:title>
        <h1>

            {{ trans('global.show') }}
            {{ trans('cruds.test-car1268830531.title_singular') }}
        </h1>

    </x-slot:title>

    @livewire('namespace.test.show', ['testCar1268830531' => $testCar1268830531])

</x-layouts.app>