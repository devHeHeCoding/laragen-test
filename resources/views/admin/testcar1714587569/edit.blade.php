<x-layouts.app>

    <x-slot:title>    <h1>
        {{ trans('global.edit') }}
        {{ trans('cruds.test-car1714587569.title_singular') }}    </h1>
    </x-slot:title>
    @livewire('test-car1714587569.edit', ['testCar1714587569' => $testCar1714587569])

</x-layouts.app>