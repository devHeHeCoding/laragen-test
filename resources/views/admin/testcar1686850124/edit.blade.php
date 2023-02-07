<x-layouts.app>

    <x-slot:title>    <h1>
        {{ trans('global.edit') }}
        {{ trans('cruds.test-car1686850124.title_singular') }}    </h1>
    </x-slot:title>
    @livewire('test-car1686850124.edit', ['testCar1686850124' => $testCar1686850124])

</x-layouts.app>