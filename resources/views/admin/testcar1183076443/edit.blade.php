<x-layouts.app>

    <x-slot:title>    <h1>
        {{ trans('global.edit') }}
        {{ trans('cruds.test-car1183076443.title_singular') }}    </h1>
    </x-slot:title>
    @livewire('test-car1183076443.edit', ['testCar1183076443' => $testCar1183076443])

</x-layouts.app>