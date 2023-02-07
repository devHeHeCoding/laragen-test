<x-layouts.app>

    <x-slot:title>    <h1>
        {{ trans('global.edit') }}
        {{ trans('cruds.test-car1921867778.title_singular') }}    </h1>
    </x-slot:title>
    @livewire('test-car1921867778.edit', ['testCar1921867778' => $testCar1921867778])

</x-layouts.app>