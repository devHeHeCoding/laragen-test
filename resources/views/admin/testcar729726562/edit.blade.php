<x-layouts.app>

    <x-slot:title>    <h1>
        {{ trans('global.edit') }}
        {{ trans('cruds.test-car729726562.title_singular') }}    </h1>
    </x-slot:title>
    @livewire('test-car729726562.edit', ['testCar729726562' => $testCar729726562])

</x-layouts.app>