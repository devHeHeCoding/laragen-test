<x-layouts.app>

    <x-slot:title>    <h1>
        {{ trans('global.edit') }}
        {{ trans('cruds.test-car1576106383.title_singular') }}    </h1>
    </x-slot:title>
    @livewire('test-car1576106383.edit', ['testCar1576106383' => $testCar1576106383])

</x-layouts.app>