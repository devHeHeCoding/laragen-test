<x-layouts.app>

    <x-slot:title>    <h1>
        {{ trans('global.edit') }}
        {{ trans('cruds.test-car742407724.title_singular') }}    </h1>
    </x-slot:title>
    @livewire('test-car742407724.edit', ['testCar742407724' => $testCar742407724])

</x-layouts.app>