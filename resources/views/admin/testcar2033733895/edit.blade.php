<x-layouts.app>

    <x-slot:title>    <h1>
        {{ trans('global.edit') }}
        {{ trans('cruds.test-car2033733895.title_singular') }}    </h1>
    </x-slot:title>
    @livewire('test-car2033733895.edit', ['testCar2033733895' => $testCar2033733895])

</x-layouts.app>