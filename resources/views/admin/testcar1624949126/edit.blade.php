<x-layouts.app>

    <x-slot:title>    <h1>
        {{ trans('global.edit') }}
        {{ trans('cruds.test-car1624949126.title_singular') }}    </h1>
    </x-slot:title>
    @livewire('test-car1624949126.edit', ['testCar1624949126' => $testCar1624949126])

</x-layouts.app>