<x-layouts.app>

    <x-slot:title>    <h1>
        {{ trans('global.edit') }}
        {{ trans('cruds.test-car1105510463.title_singular') }}    </h1>
    </x-slot:title>
    @livewire('test-car1105510463.edit', ['testCar1105510463' => $testCar1105510463])

</x-layouts.app>