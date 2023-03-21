<x-layouts.app>

    <x-slot:title>    <h1>
        {{ trans('global.edit') }}
        {{ trans('cruds.test-car1296106034.title_singular') }}    </h1>
    </x-slot:title>
    @livewire('test-car1296106034.edit', ['testCar1296106034' => $testCar1296106034])

</x-layouts.app>