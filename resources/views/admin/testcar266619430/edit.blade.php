<x-layouts.app>

    <x-slot:title>    <h1>
        {{ trans('global.edit') }}
        {{ trans('cruds.test-car266619430.title_singular') }}    </h1>
    </x-slot:title>
    @livewire('test-car266619430.edit', ['testCar266619430' => $testCar266619430])

</x-layouts.app>