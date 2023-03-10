<x-layouts.app>

    <x-slot:title>    <h1>
        {{ trans('global.edit') }}
        {{ trans('cruds.test-car1319824640.title_singular') }}    </h1>
    </x-slot:title>
    @livewire('test-car1319824640.edit', ['testCar1319824640' => $testCar1319824640])

</x-layouts.app>