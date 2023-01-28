<x-layouts.app>

    <x-slot:title>    <h1>
        {{ trans('global.edit') }}
        {{ trans('cruds.test-car2041988623.title_singular') }}    </h1>
    </x-slot:title>
    @livewire('test-car2041988623.edit', ['testCar2041988623' => $testCar2041988623])

</x-layouts.app>