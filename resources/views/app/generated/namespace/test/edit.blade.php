<x-layouts.app>

    <x-slot:title>    <h1>
        {{ trans('global.edit') }}
        {{ trans('cruds.test-car802765708.title_singular') }}    </h1>
    </x-slot:title>
    @livewire('namespace.test.edit', ['testCar802765708' => $testCar802765708])

</x-layouts.app>