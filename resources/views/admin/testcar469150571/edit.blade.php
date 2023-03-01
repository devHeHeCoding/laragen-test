<x-layouts.app>

    <x-slot:title>    <h1>
        {{ trans('global.edit') }}
        {{ trans('cruds.test-car469150571.title_singular') }}    </h1>
    </x-slot:title>
    @livewire('test-car469150571.edit', ['testCar469150571' => $testCar469150571])

</x-layouts.app>