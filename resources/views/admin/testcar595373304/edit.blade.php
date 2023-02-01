<x-layouts.app>

    <x-slot:title>    <h1>
        {{ trans('global.edit') }}
        {{ trans('cruds.test-car595373304.title_singular') }}    </h1>
    </x-slot:title>
    @livewire('test-car595373304.edit', ['testCar595373304' => $testCar595373304])

</x-layouts.app>