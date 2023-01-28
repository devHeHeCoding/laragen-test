<x-layouts.app>

    <x-slot:title>    <h1>
        {{ trans('global.edit') }}
        {{ trans('cruds.test-car1090882700.title_singular') }}    </h1>
    </x-slot:title>
    @livewire('test-car1090882700.edit', ['testCar1090882700' => $testCar1090882700])

</x-layouts.app>