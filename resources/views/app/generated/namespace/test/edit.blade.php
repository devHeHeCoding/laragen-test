<x-layouts.app>

    <x-slot:title>    <h1>
        {{ trans('global.edit') }}
        {{ trans('cruds.test-car924683350.title_singular') }}    </h1>
    </x-slot:title>
    @livewire('namespace.test.edit', ['testCar924683350' => $testCar924683350])

</x-layouts.app>