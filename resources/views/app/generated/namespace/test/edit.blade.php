<x-layouts.app>

    <x-slot:title>    <h1>
        {{ trans('global.edit') }}
        {{ trans('cruds.test-car100524395.title_singular') }}    </h1>
    </x-slot:title>
    @livewire('namespace.test.edit', ['testCar100524395' => $testCar100524395])

</x-layouts.app>