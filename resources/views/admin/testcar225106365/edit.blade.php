<x-layouts.app>

    <x-slot:title>    <h1>
        {{ trans('global.edit') }}
        {{ trans('cruds.test-car225106365.title_singular') }}    </h1>
    </x-slot:title>
    @livewire('test-car225106365.edit', ['testCar225106365' => $testCar225106365])

</x-layouts.app>