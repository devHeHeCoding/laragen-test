<x-layouts.app>

    <x-slot:title>    <h1>
        {{ trans('global.edit') }}
        {{ trans('cruds.test-car740428112.title_singular') }}    </h1>
    </x-slot:title>
    @livewire('namespace.test.edit', ['testCar740428112' => $testCar740428112])

</x-layouts.app>