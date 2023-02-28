<x-layouts.app>

    <x-slot:title>    <h1>
        {{ trans('global.edit') }}
        {{ trans('cruds.test-car1477719599.title_singular') }}    </h1>
    </x-slot:title>
    @livewire('test-car1477719599.edit', ['testCar1477719599' => $testCar1477719599])

</x-layouts.app>