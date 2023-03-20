<x-layouts.app>

    <x-slot:title>    <h1>
        {{ trans('global.edit') }}
        {{ trans('cruds.test-car2069782875.title_singular') }}    </h1>
    </x-slot:title>
    @livewire('test-car2069782875.edit', ['testCar2069782875' => $testCar2069782875])

</x-layouts.app>