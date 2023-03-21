<x-layouts.app>

    <x-slot:title>    <h1>
        {{ trans('global.edit') }}
        {{ trans('cruds.test-car995898570.title_singular') }}    </h1>
    </x-slot:title>
    @livewire('test-car995898570.edit', ['testCar995898570' => $testCar995898570])

</x-layouts.app>