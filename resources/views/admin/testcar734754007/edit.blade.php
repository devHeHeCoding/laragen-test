<x-layouts.app>

    <x-slot:title>    <h1>
        {{ trans('global.edit') }}
        {{ trans('cruds.test-car734754007.title_singular') }}    </h1>
    </x-slot:title>
    @livewire('test-car734754007.edit', ['testCar734754007' => $testCar734754007])

</x-layouts.app>