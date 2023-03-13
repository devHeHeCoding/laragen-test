<x-layouts.app>

    <x-slot:title>    <h1>
        {{ trans('global.edit') }}
        {{ trans('cruds.test-car932819473.title_singular') }}    </h1>
    </x-slot:title>
    @livewire('test-car932819473.edit', ['testCar932819473' => $testCar932819473])

</x-layouts.app>