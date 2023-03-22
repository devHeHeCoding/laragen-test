<x-layouts.app>

    <x-slot:title>    <h1>
        {{ trans('global.edit') }}
        {{ trans('cruds.test-car876034793.title_singular') }}    </h1>
    </x-slot:title>
    @livewire('namespace.test.edit', ['testCar876034793' => $testCar876034793])

</x-layouts.app>