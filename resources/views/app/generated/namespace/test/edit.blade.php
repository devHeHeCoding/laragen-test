<x-layouts.app>

    <x-slot:title>    <h1>
        {{ trans('global.edit') }}
        {{ trans('cruds.test-car631872373.title_singular') }}    </h1>
    </x-slot:title>
    @livewire('app.namespace.test.edit', ['testCar631872373' => $testCar631872373])

</x-layouts.app>