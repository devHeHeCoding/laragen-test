<x-layouts.app>

    <x-slot:title>    <h1>
        {{ trans('global.edit') }}
        {{ trans('cruds.test-car664264609.title_singular') }}    </h1>
    </x-slot:title>
    @livewire('test-car664264609.edit', ['testCar664264609' => $testCar664264609])

</x-layouts.app>