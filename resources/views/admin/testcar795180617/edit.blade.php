<x-layouts.app>

    <x-slot:title>    <h1>
        {{ trans('global.edit') }}
        {{ trans('cruds.test-car795180617.title_singular') }}    </h1>
    </x-slot:title>
    @livewire('test-car795180617.edit', ['testCar795180617' => $testCar795180617])

</x-layouts.app>