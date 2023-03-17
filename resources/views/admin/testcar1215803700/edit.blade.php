<x-layouts.app>

    <x-slot:title>    <h1>
        {{ trans('global.edit') }}
        {{ trans('cruds.test-car1215803700.title_singular') }}    </h1>
    </x-slot:title>
    @livewire('test-car1215803700.edit', ['testCar1215803700' => $testCar1215803700])

</x-layouts.app>