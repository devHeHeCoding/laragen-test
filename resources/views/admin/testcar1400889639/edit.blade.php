<x-layouts.app>

    <x-slot:title>    <h1>
        {{ trans('global.edit') }}
        {{ trans('cruds.test-car1400889639.title_singular') }}    </h1>
    </x-slot:title>
    @livewire('test-car1400889639.edit', ['testCar1400889639' => $testCar1400889639])

</x-layouts.app>