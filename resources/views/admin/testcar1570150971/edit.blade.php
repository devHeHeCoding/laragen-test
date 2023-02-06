<x-layouts.app>

    <x-slot:title>    <h1>
        {{ trans('global.edit') }}
        {{ trans('cruds.test-car1570150971.title_singular') }}    </h1>
    </x-slot:title>
    @livewire('test-car1570150971.edit', ['testCar1570150971' => $testCar1570150971])

</x-layouts.app>