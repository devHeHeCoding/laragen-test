<x-layouts.app>

    <x-slot:title>    <h1>
        {{ trans('global.edit') }}
        {{ trans('cruds.test-car1567495526.title_singular') }}    </h1>
    </x-slot:title>
    @livewire('test-car1567495526.edit', ['testCar1567495526' => $testCar1567495526])

</x-layouts.app>