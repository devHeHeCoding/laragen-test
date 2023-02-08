<x-layouts.app>

    <x-slot:title>    <h1>
        {{ trans('global.edit') }}
        {{ trans('cruds.test-car172238442.title_singular') }}    </h1>
    </x-slot:title>
    @livewire('test-car172238442.edit', ['testCar172238442' => $testCar172238442])

</x-layouts.app>