<x-layouts.app>

    <x-slot:title>    <h1>
        {{ trans('global.edit') }}
        {{ trans('cruds.test-car738236358.title_singular') }}    </h1>
    </x-slot:title>
    @livewire('test-car738236358.edit', ['testCar738236358' => $testCar738236358])

</x-layouts.app>