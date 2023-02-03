<x-layouts.app>

    <x-slot:title>    <h1>
        {{ trans('global.edit') }}
        {{ trans('cruds.test-car1490996067.title_singular') }}    </h1>
    </x-slot:title>
    @livewire('test-car1490996067.edit', ['testCar1490996067' => $testCar1490996067])

</x-layouts.app>