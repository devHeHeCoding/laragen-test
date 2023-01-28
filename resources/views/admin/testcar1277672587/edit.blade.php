<x-layouts.app>

    <x-slot:title>    <h1>
        {{ trans('global.edit') }}
        {{ trans('cruds.test-car1277672587.title_singular') }}    </h1>
    </x-slot:title>
    @livewire('test-car1277672587.edit', ['testCar1277672587' => $testCar1277672587])

</x-layouts.app>