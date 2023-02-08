<x-layouts.app>

    <x-slot:title>    <h1>
        {{ trans('global.edit') }}
        {{ trans('cruds.test-car319591901.title_singular') }}    </h1>
    </x-slot:title>
    @livewire('test-car319591901.edit', ['testCar319591901' => $testCar319591901])

</x-layouts.app>