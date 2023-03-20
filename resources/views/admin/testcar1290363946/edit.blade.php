<x-layouts.app>

    <x-slot:title>    <h1>
        {{ trans('global.edit') }}
        {{ trans('cruds.test-car1290363946.title_singular') }}    </h1>
    </x-slot:title>
    @livewire('test-car1290363946.edit', ['testCar1290363946' => $testCar1290363946])

</x-layouts.app>