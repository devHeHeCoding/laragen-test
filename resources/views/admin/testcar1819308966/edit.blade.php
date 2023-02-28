<x-layouts.app>

    <x-slot:title>    <h1>
        {{ trans('global.edit') }}
        {{ trans('cruds.test-car1819308966.title_singular') }}    </h1>
    </x-slot:title>
    @livewire('test-car1819308966.edit', ['testCar1819308966' => $testCar1819308966])

</x-layouts.app>