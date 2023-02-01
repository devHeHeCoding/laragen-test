<x-layouts.app>

    <x-slot:title>    <h1>
        {{ trans('global.edit') }}
        {{ trans('cruds.test-car761078444.title_singular') }}    </h1>
    </x-slot:title>
    @livewire('test-car761078444.edit', ['testCar761078444' => $testCar761078444])

</x-layouts.app>