<x-layouts.app>

    <x-slot:title>    <h1>
        {{ trans('global.edit') }}
        {{ trans('cruds.test-car867844321.title_singular') }}    </h1>
    </x-slot:title>
    @livewire('test-car867844321.edit', ['testCar867844321' => $testCar867844321])

</x-layouts.app>