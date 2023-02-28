<x-layouts.app>

    <x-slot:title>    <h1>
        {{ trans('global.edit') }}
        {{ trans('cruds.test-car1376813211.title_singular') }}    </h1>
    </x-slot:title>
    @livewire('test-car1376813211.edit', ['testCar1376813211' => $testCar1376813211])

</x-layouts.app>