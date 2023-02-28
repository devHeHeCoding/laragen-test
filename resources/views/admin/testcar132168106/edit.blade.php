<x-layouts.app>

    <x-slot:title>    <h1>
        {{ trans('global.edit') }}
        {{ trans('cruds.test-car132168106.title_singular') }}    </h1>
    </x-slot:title>
    @livewire('test-car132168106.edit', ['testCar132168106' => $testCar132168106])

</x-layouts.app>