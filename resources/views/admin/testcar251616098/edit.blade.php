<x-layouts.app>

    <x-slot:title>    <h1>
        {{ trans('global.edit') }}
        {{ trans('cruds.test-car251616098.title_singular') }}    </h1>
    </x-slot:title>
    @livewire('test-car251616098.edit', ['testCar251616098' => $testCar251616098])

</x-layouts.app>