<x-layouts.app>

    <x-slot:title>    <h1>
        {{ trans('global.edit') }}
        {{ trans('cruds.test-car672712618.title_singular') }}    </h1>
    </x-slot:title>
    @livewire('test-car672712618.edit', ['testCar672712618' => $testCar672712618])

</x-layouts.app>