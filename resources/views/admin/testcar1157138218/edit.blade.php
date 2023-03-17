<x-layouts.app>

    <x-slot:title>    <h1>
        {{ trans('global.edit') }}
        {{ trans('cruds.test-car1157138218.title_singular') }}    </h1>
    </x-slot:title>
    @livewire('test-car1157138218.edit', ['testCar1157138218' => $testCar1157138218])

</x-layouts.app>