<x-layouts.app>

    <x-slot:title>    <h1>
        {{ trans('global.edit') }}
        {{ trans('cruds.test-car1879614189.title_singular') }}    </h1>
    </x-slot:title>
    @livewire('test-car1879614189.edit', ['testCar1879614189' => $testCar1879614189])

</x-layouts.app>