<x-layouts.app>

    <x-slot:title>    <h1>
        {{ trans('global.edit') }}
        {{ trans('cruds.test-car584339812.title_singular') }}    </h1>
    </x-slot:title>
    @livewire('test-car584339812.edit', ['testCar584339812' => $testCar584339812])

</x-layouts.app>