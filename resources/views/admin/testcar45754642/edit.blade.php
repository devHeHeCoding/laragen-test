<x-layouts.app>

    <x-slot:title>    <h1>
        {{ trans('global.edit') }}
        {{ trans('cruds.test-car45754642.title_singular') }}    </h1>
    </x-slot:title>
    @livewire('test-car45754642.edit', ['testCar45754642' => $testCar45754642])

</x-layouts.app>