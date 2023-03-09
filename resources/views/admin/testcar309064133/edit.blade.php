<x-layouts.app>

    <x-slot:title>    <h1>
        {{ trans('global.edit') }}
        {{ trans('cruds.test-car309064133.title_singular') }}    </h1>
    </x-slot:title>
    @livewire('test-car309064133.edit', ['testCar309064133' => $testCar309064133])

</x-layouts.app>