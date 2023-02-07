<x-layouts.app>

    <x-slot:title>    <h1>
        {{ trans('global.edit') }}
        {{ trans('cruds.test-car138184623.title_singular') }}    </h1>
    </x-slot:title>
    @livewire('test-car138184623.edit', ['testCar138184623' => $testCar138184623])

</x-layouts.app>