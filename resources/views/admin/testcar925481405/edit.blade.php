<x-layouts.app>

    <x-slot:title>    <h1>
        {{ trans('global.edit') }}
        {{ trans('cruds.test-car925481405.title_singular') }}    </h1>
    </x-slot:title>
    @livewire('test-car925481405.edit', ['testCar925481405' => $testCar925481405])

</x-layouts.app>