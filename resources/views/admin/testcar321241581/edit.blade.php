<x-layouts.app>

    <x-slot:title>    <h1>
        {{ trans('global.edit') }}
        {{ trans('cruds.test-car321241581.title_singular') }}    </h1>
    </x-slot:title>
    @livewire('test-car321241581.edit', ['testCar321241581' => $testCar321241581])

</x-layouts.app>