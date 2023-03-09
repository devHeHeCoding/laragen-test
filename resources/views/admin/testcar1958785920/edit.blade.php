<x-layouts.app>

    <x-slot:title>    <h1>
        {{ trans('global.edit') }}
        {{ trans('cruds.test-car1958785920.title_singular') }}    </h1>
    </x-slot:title>
    @livewire('test-car1958785920.edit', ['testCar1958785920' => $testCar1958785920])

</x-layouts.app>