<x-layouts.app>

    <x-slot:title>    <h1>
        {{ trans('global.edit') }}
        {{ trans('cruds.test-car239793807.title_singular') }}    </h1>
    </x-slot:title>
    @livewire('test-car239793807.edit', ['testCar239793807' => $testCar239793807])

</x-layouts.app>