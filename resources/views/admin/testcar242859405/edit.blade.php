<x-layouts.app>

    <x-slot:title>    <h1>
        {{ trans('global.edit') }}
        {{ trans('cruds.test-car242859405.title_singular') }}    </h1>
    </x-slot:title>
    @livewire('test-car242859405.edit', ['testCar242859405' => $testCar242859405])

</x-layouts.app>