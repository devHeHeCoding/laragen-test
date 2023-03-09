<x-layouts.app>

    <x-slot:title>    <h1>
        {{ trans('global.edit') }}
        {{ trans('cruds.test-car260875948.title_singular') }}    </h1>
    </x-slot:title>
    @livewire('test-car260875948.edit', ['testCar260875948' => $testCar260875948])

</x-layouts.app>