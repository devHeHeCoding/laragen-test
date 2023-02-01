<x-layouts.app>

    <x-slot:title>    <h1>
        {{ trans('global.edit') }}
        {{ trans('cruds.test-car397828097.title_singular') }}    </h1>
    </x-slot:title>
    @livewire('test-car397828097.edit', ['testCar397828097' => $testCar397828097])

</x-layouts.app>