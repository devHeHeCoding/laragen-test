<x-layouts.app>

    <x-slot:title>    <h1>
        {{ trans('global.edit') }}
        {{ trans('cruds.test-car1164626058.title_singular') }}    </h1>
    </x-slot:title>
    @livewire('test-car1164626058.edit', ['testCar1164626058' => $testCar1164626058])

</x-layouts.app>