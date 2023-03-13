<x-layouts.app>

    <x-slot:title>    <h1>
        {{ trans('global.edit') }}
        {{ trans('cruds.test-car68996410.title_singular') }}    </h1>
    </x-slot:title>
    @livewire('test-car68996410.edit', ['testCar68996410' => $testCar68996410])

</x-layouts.app>