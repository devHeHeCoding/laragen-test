<x-layouts.app>

    <x-slot:title>    <h1>
        {{ trans('global.edit') }}
        {{ trans('cruds.test-car1910293284.title_singular') }}    </h1>
    </x-slot:title>
    @livewire('test-car1910293284.edit', ['testCar1910293284' => $testCar1910293284])

</x-layouts.app>