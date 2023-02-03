<x-layouts.app>

    <x-slot:title>    <h1>
        {{ trans('global.edit') }}
        {{ trans('cruds.test-car1651712778.title_singular') }}    </h1>
    </x-slot:title>
    @livewire('test-car1651712778.edit', ['testCar1651712778' => $testCar1651712778])

</x-layouts.app>