<x-layouts.app>

    <x-slot:title>    <h1>
        {{ trans('global.edit') }}
        {{ trans('cruds.test-car250640198.title_singular') }}    </h1>
    </x-slot:title>
    @livewire('test-car250640198.edit', ['testCar250640198' => $testCar250640198])

</x-layouts.app>