<x-layouts.app>

    <x-slot:title>    <h1>
        {{ trans('global.edit') }}
        {{ trans('cruds.test-car1750227684.title_singular') }}    </h1>
    </x-slot:title>
    @livewire('test-car1750227684.edit', ['testCar1750227684' => $testCar1750227684])

</x-layouts.app>