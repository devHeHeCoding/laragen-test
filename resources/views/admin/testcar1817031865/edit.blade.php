<x-layouts.app>

    <x-slot:title>    <h1>
        {{ trans('global.edit') }}
        {{ trans('cruds.test-car1817031865.title_singular') }}    </h1>
    </x-slot:title>
    @livewire('test-car1817031865.edit', ['testCar1817031865' => $testCar1817031865])

</x-layouts.app>