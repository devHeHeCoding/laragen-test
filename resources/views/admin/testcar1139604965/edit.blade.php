<x-layouts.app>

    <x-slot:title>    <h1>
        {{ trans('global.edit') }}
        {{ trans('cruds.test-car1139604965.title_singular') }}    </h1>
    </x-slot:title>
    @livewire('test-car1139604965.edit', ['testCar1139604965' => $testCar1139604965])

</x-layouts.app>