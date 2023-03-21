<x-layouts.app>

    <x-slot:title>    <h1>
        {{ trans('global.edit') }}
        {{ trans('cruds.test-car1400970972.title_singular') }}    </h1>
    </x-slot:title>
    @livewire('test-car1400970972.edit', ['testCar1400970972' => $testCar1400970972])

</x-layouts.app>