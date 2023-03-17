<x-layouts.app>

    <x-slot:title>    <h1>
        {{ trans('global.edit') }}
        {{ trans('cruds.test-car1482105301.title_singular') }}    </h1>
    </x-slot:title>
    @livewire('test-car1482105301.edit', ['testCar1482105301' => $testCar1482105301])

</x-layouts.app>