<x-layouts.app>

    <x-slot:title>    <h1>
        {{ trans('global.edit') }}
        {{ trans('cruds.test-car150542530.title_singular') }}    </h1>
    </x-slot:title>
    @livewire('test-car150542530.edit', ['testCar150542530' => $testCar150542530])

</x-layouts.app>