<x-layouts.app>

    <x-slot:title>    <h1>
        {{ trans('global.edit') }}
        {{ trans('cruds.test-car1703159673.title_singular') }}    </h1>
    </x-slot:title>
    @livewire('test-car1703159673.edit', ['testCar1703159673' => $testCar1703159673])

</x-layouts.app>