<x-layouts.app>

    <x-slot:title>    <h1>
        {{ trans('global.edit') }}
        {{ trans('cruds.test-car1916189146.title_singular') }}    </h1>
    </x-slot:title>
    @livewire('test-car1916189146.edit', ['testCar1916189146' => $testCar1916189146])

</x-layouts.app>