<x-layouts.app>

    <x-slot:title>    <h1>
        {{ trans('global.edit') }}
        {{ trans('cruds.test-car1844893232.title_singular') }}    </h1>
    </x-slot:title>
    @livewire('test-car1844893232.edit', ['testCar1844893232' => $testCar1844893232])

</x-layouts.app>