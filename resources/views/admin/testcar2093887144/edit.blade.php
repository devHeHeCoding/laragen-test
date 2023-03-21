<x-layouts.app>

    <x-slot:title>    <h1>
        {{ trans('global.edit') }}
        {{ trans('cruds.test-car2093887144.title_singular') }}    </h1>
    </x-slot:title>
    @livewire('test-car2093887144.edit', ['testCar2093887144' => $testCar2093887144])

</x-layouts.app>