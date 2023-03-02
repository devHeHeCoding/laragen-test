<x-layouts.app>

    <x-slot:title>    <h1>
        {{ trans('global.edit') }}
        {{ trans('cruds.test-car811601916.title_singular') }}    </h1>
    </x-slot:title>
    @livewire('test-car811601916.edit', ['testCar811601916' => $testCar811601916])

</x-layouts.app>