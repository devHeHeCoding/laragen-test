<x-layouts.app>

    <x-slot:title>    <h1>
        {{ trans('global.edit') }}
        {{ trans('cruds.test-car1949212830.title_singular') }}    </h1>
    </x-slot:title>
    @livewire('test-car1949212830.edit', ['testCar1949212830' => $testCar1949212830])

</x-layouts.app>