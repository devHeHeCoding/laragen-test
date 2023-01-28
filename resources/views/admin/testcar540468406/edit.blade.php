<x-layouts.app>

    <x-slot:title>    <h1>
        {{ trans('global.edit') }}
        {{ trans('cruds.test-car540468406.title_singular') }}    </h1>
    </x-slot:title>
    @livewire('test-car540468406.edit', ['testCar540468406' => $testCar540468406])

</x-layouts.app>