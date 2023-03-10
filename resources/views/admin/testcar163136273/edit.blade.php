<x-layouts.app>

    <x-slot:title>    <h1>
        {{ trans('global.edit') }}
        {{ trans('cruds.test-car163136273.title_singular') }}    </h1>
    </x-slot:title>
    @livewire('test-car163136273.edit', ['testCar163136273' => $testCar163136273])

</x-layouts.app>