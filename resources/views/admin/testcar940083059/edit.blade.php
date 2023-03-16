<x-layouts.app>

    <x-slot:title>    <h1>
        {{ trans('global.edit') }}
        {{ trans('cruds.test-car940083059.title_singular') }}    </h1>
    </x-slot:title>
    @livewire('test-car940083059.edit', ['testCar940083059' => $testCar940083059])

</x-layouts.app>