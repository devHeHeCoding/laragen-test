<x-layouts.app>

    <x-slot:title>    <h1>
        {{ trans('global.edit') }}
        {{ trans('cruds.test-car1499312371.title_singular') }}    </h1>
    </x-slot:title>
    @livewire('test-car1499312371.edit', ['testCar1499312371' => $testCar1499312371])

</x-layouts.app>