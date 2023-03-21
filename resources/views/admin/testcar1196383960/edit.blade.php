<x-layouts.app>

    <x-slot:title>    <h1>
        {{ trans('global.edit') }}
        {{ trans('cruds.test-car1196383960.title_singular') }}    </h1>
    </x-slot:title>
    @livewire('test-car1196383960.edit', ['testCar1196383960' => $testCar1196383960])

</x-layouts.app>