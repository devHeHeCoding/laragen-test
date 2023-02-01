<x-layouts.app>

    <x-slot:title>    <h1>
        {{ trans('global.edit') }}
        {{ trans('cruds.test-car1980886838.title_singular') }}    </h1>
    </x-slot:title>
    @livewire('test-car1980886838.edit', ['testCar1980886838' => $testCar1980886838])

</x-layouts.app>