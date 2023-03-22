<x-layouts.app>

    <x-slot:title>    <h1>
        {{ trans('global.edit') }}
        {{ trans('cruds.test-car23802103.title_singular') }}    </h1>
    </x-slot:title>
    @livewire('namespace.test.edit', ['testCar23802103' => $testCar23802103])

</x-layouts.app>