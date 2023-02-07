<x-layouts.app>

    <x-slot:title>    <h1>
        {{ trans('global.edit') }}
        {{ trans('cruds.test-car861605239.title_singular') }}    </h1>
    </x-slot:title>
    @livewire('test-car861605239.edit', ['testCar861605239' => $testCar861605239])

</x-layouts.app>