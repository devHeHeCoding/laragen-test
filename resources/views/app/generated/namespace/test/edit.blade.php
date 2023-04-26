<x-layouts.app>

    <x-slot:title>    <h1>
        {{ trans('global.edit') }}
        {{ trans('cruds.test-car1969785309.title_singular') }}    </h1>
    </x-slot:title>
    @livewire('app.namespace.test.edit', ['testCar1969785309' => $testCar1969785309])

</x-layouts.app>