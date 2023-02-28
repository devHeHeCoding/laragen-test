<x-layouts.app>

    <x-slot:title>    <h1>
        {{ trans('global.edit') }}
        {{ trans('cruds.test-car2069207647.title_singular') }}    </h1>
    </x-slot:title>
    @livewire('test-car2069207647.edit', ['testCar2069207647' => $testCar2069207647])

</x-layouts.app>