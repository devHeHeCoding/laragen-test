<x-layouts.app>

    <x-slot:title>    <h1>
        {{ trans('global.edit') }}
        {{ trans('cruds.test-car655714358.title_singular') }}    </h1>
    </x-slot:title>
    @livewire('test-car655714358.edit', ['testCar655714358' => $testCar655714358])

</x-layouts.app>