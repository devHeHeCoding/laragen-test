<x-layouts.app>

    <x-slot:title>    <h1>
        {{ trans('global.edit') }}
        {{ trans('cruds.test-car1425819819.title_singular') }}    </h1>
    </x-slot:title>
    @livewire('test-car1425819819.edit', ['testCar1425819819' => $testCar1425819819])

</x-layouts.app>