<x-layouts.app>

    <x-slot:title>    <h1>
        {{ trans('global.edit') }}
        {{ trans('cruds.test-car2120781035.title_singular') }}    </h1>
    </x-slot:title>
    @livewire('test-car2120781035.edit', ['testCar2120781035' => $testCar2120781035])

</x-layouts.app>