<x-layouts.app>

    <x-slot:title>    <h1>
        {{ trans('global.edit') }}
        {{ trans('cruds.test-car1070024050.title_singular') }}    </h1>
    </x-slot:title>
    @livewire('test-car1070024050.edit', ['testCar1070024050' => $testCar1070024050])

</x-layouts.app>