<x-layouts.app>

    <x-slot:title>    <h1>
        {{ trans('global.edit') }}
        {{ trans('cruds.test-car1818946289.title_singular') }}    </h1>
    </x-slot:title>
    @livewire('test-car1818946289.edit', ['testCar1818946289' => $testCar1818946289])

</x-layouts.app>