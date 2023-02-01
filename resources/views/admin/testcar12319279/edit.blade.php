<x-layouts.app>

    <x-slot:title>    <h1>
        {{ trans('global.edit') }}
        {{ trans('cruds.test-car12319279.title_singular') }}    </h1>
    </x-slot:title>
    @livewire('test-car12319279.edit', ['testCar12319279' => $testCar12319279])

</x-layouts.app>