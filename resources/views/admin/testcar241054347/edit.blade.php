<x-layouts.app>

    <x-slot:title>    <h1>
        {{ trans('global.edit') }}
        {{ trans('cruds.test-car241054347.title_singular') }}    </h1>
    </x-slot:title>
    @livewire('test-car241054347.edit', ['testCar241054347' => $testCar241054347])

</x-layouts.app>