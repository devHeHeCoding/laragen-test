<x-layouts.app>

    <x-slot:title>    <h1>
        {{ trans('global.edit') }}
        {{ trans('cruds.test-car592950477.title_singular') }}    </h1>
    </x-slot:title>
    @livewire('test-car592950477.edit', ['testCar592950477' => $testCar592950477])

</x-layouts.app>