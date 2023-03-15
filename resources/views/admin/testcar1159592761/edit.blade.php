<x-layouts.app>

    <x-slot:title>    <h1>
        {{ trans('global.edit') }}
        {{ trans('cruds.test-car1159592761.title_singular') }}    </h1>
    </x-slot:title>
    @livewire('test-car1159592761.edit', ['testCar1159592761' => $testCar1159592761])

</x-layouts.app>