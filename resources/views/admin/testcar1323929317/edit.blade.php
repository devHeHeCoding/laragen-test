<x-layouts.app>

    <x-slot:title>    <h1>
        {{ trans('global.edit') }}
        {{ trans('cruds.test-car1323929317.title_singular') }}    </h1>
    </x-slot:title>
    @livewire('test-car1323929317.edit', ['testCar1323929317' => $testCar1323929317])

</x-layouts.app>