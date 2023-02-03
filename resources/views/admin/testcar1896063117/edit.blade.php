<x-layouts.app>

    <x-slot:title>    <h1>
        {{ trans('global.edit') }}
        {{ trans('cruds.test-car1896063117.title_singular') }}    </h1>
    </x-slot:title>
    @livewire('test-car1896063117.edit', ['testCar1896063117' => $testCar1896063117])

</x-layouts.app>