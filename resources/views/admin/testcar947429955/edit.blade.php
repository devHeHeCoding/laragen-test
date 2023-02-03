<x-layouts.app>

    <x-slot:title>    <h1>
        {{ trans('global.edit') }}
        {{ trans('cruds.test-car947429955.title_singular') }}    </h1>
    </x-slot:title>
    @livewire('test-car947429955.edit', ['testCar947429955' => $testCar947429955])

</x-layouts.app>