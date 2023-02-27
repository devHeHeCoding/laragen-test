<x-layouts.app>

    <x-slot:title>    <h1>
        {{ trans('global.edit') }}
        {{ trans('cruds.test-car584991464.title_singular') }}    </h1>
    </x-slot:title>
    @livewire('test-car584991464.edit', ['testCar584991464' => $testCar584991464])

</x-layouts.app>