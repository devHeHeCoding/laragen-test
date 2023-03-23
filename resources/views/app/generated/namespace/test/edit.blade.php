<x-layouts.app>

    <x-slot:title>    <h1>
        {{ trans('global.edit') }}
        {{ trans('cruds.test-car1436258828.title_singular') }}    </h1>
    </x-slot:title>
    @livewire('namespace.test.edit', ['testCar1436258828' => $testCar1436258828])

</x-layouts.app>