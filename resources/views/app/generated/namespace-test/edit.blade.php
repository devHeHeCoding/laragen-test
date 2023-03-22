<x-layouts.app>

    <x-slot:title>    <h1>
        {{ trans('global.edit') }}
        {{ trans('cruds.test-car1268830531.title_singular') }}    </h1>
    </x-slot:title>
    @livewire('namespace.test.edit', ['testCar1268830531' => $testCar1268830531])

</x-layouts.app>