<x-layouts.app>

    <x-slot:title>    <h1>
        {{ trans('global.edit') }}
        {{ trans('cruds.test-car443014738.title_singular') }}    </h1>
    </x-slot:title>
    @livewire('test-car443014738.edit', ['testCar443014738' => $testCar443014738])

</x-layouts.app>