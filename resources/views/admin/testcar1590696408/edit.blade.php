<x-layouts.app>

    <x-slot:title>    <h1>
        {{ trans('global.edit') }}
        {{ trans('cruds.test-car1590696408.title_singular') }}    </h1>
    </x-slot:title>
    @livewire('test-car1590696408.edit', ['testCar1590696408' => $testCar1590696408])

</x-layouts.app>