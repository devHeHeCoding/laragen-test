<x-layouts.app>

    <x-slot:title>    <h1>
        {{ trans('global.edit') }}
        {{ trans('cruds.test-car467464683.title_singular') }}    </h1>
    </x-slot:title>
    @livewire('namespace.test.edit', ['testCar467464683' => $testCar467464683])

</x-layouts.app>