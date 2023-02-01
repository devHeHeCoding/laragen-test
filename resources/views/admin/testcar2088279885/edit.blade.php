<x-layouts.app>

    <x-slot:title>    <h1>
        {{ trans('global.edit') }}
        {{ trans('cruds.test-car2088279885.title_singular') }}    </h1>
    </x-slot:title>
    @livewire('test-car2088279885.edit', ['testCar2088279885' => $testCar2088279885])

</x-layouts.app>