<x-layouts.app>

    <x-slot:title>    <h1>
        {{ trans('global.edit') }}
        {{ trans('cruds.test-car1584959880.title_singular') }}    </h1>
    </x-slot:title>
    @livewire('test-car1584959880.edit', ['testCar1584959880' => $testCar1584959880])

</x-layouts.app>