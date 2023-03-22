<x-layouts.app>

    <x-slot:title>    <h1>
        {{ trans('global.edit') }}
        {{ trans('cruds.test-car1520283344.title_singular') }}    </h1>
    </x-slot:title>
    @livewire('namespace.test.edit', ['testCar1520283344' => $testCar1520283344])

</x-layouts.app>