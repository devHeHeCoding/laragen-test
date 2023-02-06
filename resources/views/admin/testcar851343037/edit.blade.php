<x-layouts.app>

    <x-slot:title>    <h1>
        {{ trans('global.edit') }}
        {{ trans('cruds.test-car851343037.title_singular') }}    </h1>
    </x-slot:title>
    @livewire('test-car851343037.edit', ['testCar851343037' => $testCar851343037])

</x-layouts.app>