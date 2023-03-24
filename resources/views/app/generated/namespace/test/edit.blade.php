<x-layouts.app>

    <x-slot:title>    <h1>
        {{ trans('global.edit') }}
        {{ trans('cruds.test-car147244030.title_singular') }}    </h1>
    </x-slot:title>
    @livewire('namespace.test.edit', ['testCar147244030' => $testCar147244030])

</x-layouts.app>