<x-layouts.app>

    <x-slot:title>    <h1>
        {{ trans('global.edit') }}
        {{ trans('cruds.test-car738781303.title_singular') }}    </h1>
    </x-slot:title>
    @livewire('test-car738781303.edit', ['testCar738781303' => $testCar738781303])

</x-layouts.app>