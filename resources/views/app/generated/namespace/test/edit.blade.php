<x-layouts.app>

    <x-slot:title>    <h1>
        {{ trans('global.edit') }}
        {{ trans('cruds.test-car5020602.title_singular') }}    </h1>
    </x-slot:title>
    @livewire('namespace.test.edit', ['testCar5020602' => $testCar5020602])

</x-layouts.app>