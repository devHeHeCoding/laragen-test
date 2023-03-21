<x-layouts.app>

    <x-slot:title>    <h1>
        {{ trans('global.edit') }}
        {{ trans('cruds.test-car369693455.title_singular') }}    </h1>
    </x-slot:title>
    @livewire('test-car369693455.edit', ['testCar369693455' => $testCar369693455])

</x-layouts.app>