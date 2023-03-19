<x-layouts.app>

    <x-slot:title>    <h1>
        {{ trans('global.edit') }}
        {{ trans('cruds.test-car723896777.title_singular') }}    </h1>
    </x-slot:title>
    @livewire('test-car723896777.edit', ['testCar723896777' => $testCar723896777])

</x-layouts.app>