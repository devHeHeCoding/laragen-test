<x-layouts.app>

    <x-slot:title>    <h1>
        {{ trans('global.edit') }}
        {{ trans('cruds.test-car1778677751.title_singular') }}    </h1>
    </x-slot:title>
    @livewire('test-car1778677751.edit', ['testCar1778677751' => $testCar1778677751])

</x-layouts.app>