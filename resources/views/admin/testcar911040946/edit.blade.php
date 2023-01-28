<x-layouts.app>

    <x-slot:title>    <h1>
        {{ trans('global.edit') }}
        {{ trans('cruds.test-car911040946.title_singular') }}    </h1>
    </x-slot:title>
    @livewire('test-car911040946.edit', ['testCar911040946' => $testCar911040946])

</x-layouts.app>