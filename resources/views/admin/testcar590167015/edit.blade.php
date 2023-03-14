<x-layouts.app>

    <x-slot:title>    <h1>
        {{ trans('global.edit') }}
        {{ trans('cruds.test-car590167015.title_singular') }}    </h1>
    </x-slot:title>
    @livewire('test-car590167015.edit', ['testCar590167015' => $testCar590167015])

</x-layouts.app>