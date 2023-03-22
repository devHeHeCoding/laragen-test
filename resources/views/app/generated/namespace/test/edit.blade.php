<x-layouts.app>

    <x-slot:title>    <h1>
        {{ trans('global.edit') }}
        {{ trans('cruds.test-car851673644.title_singular') }}    </h1>
    </x-slot:title>
    @livewire('namespace.test.edit', ['testCar851673644' => $testCar851673644])

</x-layouts.app>