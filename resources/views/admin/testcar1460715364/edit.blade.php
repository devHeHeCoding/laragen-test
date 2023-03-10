<x-layouts.app>

    <x-slot:title>    <h1>
        {{ trans('global.edit') }}
        {{ trans('cruds.test-car1460715364.title_singular') }}    </h1>
    </x-slot:title>
    @livewire('test-car1460715364.edit', ['testCar1460715364' => $testCar1460715364])

</x-layouts.app>