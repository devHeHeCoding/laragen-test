<x-layouts.app>

    <x-slot:title>    <h1>
        {{ trans('global.edit') }}
        {{ trans('cruds.test-car172364925.title_singular') }}    </h1>
    </x-slot:title>
    @livewire('test-car172364925.edit', ['testCar172364925' => $testCar172364925])

</x-layouts.app>