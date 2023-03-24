<x-layouts.app>

    <x-slot:title>    <h1>
        {{ trans('global.edit') }}
        {{ trans('cruds.test-car207063216.title_singular') }}    </h1>
    </x-slot:title>
    @livewire('namespace.test.edit', ['testCar207063216' => $testCar207063216])

</x-layouts.app>