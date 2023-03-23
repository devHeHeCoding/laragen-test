<x-layouts.app>

    <x-slot:title>    <h1>
        {{ trans('global.edit') }}
        {{ trans('cruds.test-car733822276.title_singular') }}    </h1>
    </x-slot:title>
    @livewire('namespace.test.edit', ['testCar733822276' => $testCar733822276])

</x-layouts.app>