<x-layouts.app>

    <x-slot:title>    <h1>
        {{ trans('global.edit') }}
        {{ trans('cruds.test-car662858584.title_singular') }}    </h1>
    </x-slot:title>
    @livewire('test-car662858584.edit', ['testCar662858584' => $testCar662858584])

</x-layouts.app>