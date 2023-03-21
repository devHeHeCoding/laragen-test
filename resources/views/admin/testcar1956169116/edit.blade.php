<x-layouts.app>

    <x-slot:title>    <h1>
        {{ trans('global.edit') }}
        {{ trans('cruds.test-car1956169116.title_singular') }}    </h1>
    </x-slot:title>
    @livewire('test-car1956169116.edit', ['testCar1956169116' => $testCar1956169116])

</x-layouts.app>