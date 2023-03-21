<x-layouts.app>

    <x-slot:title>    <h1>
        {{ trans('global.edit') }}
        {{ trans('cruds.test-car2114917132.title_singular') }}    </h1>
    </x-slot:title>
    @livewire('test-car2114917132.edit', ['testCar2114917132' => $testCar2114917132])

</x-layouts.app>