<x-layouts.app>

    <x-slot:title>    <h1>
        {{ trans('global.edit') }}
        {{ trans('cruds.test-car970372432.title_singular') }}    </h1>
    </x-slot:title>
    @livewire('test-car970372432.edit', ['testCar970372432' => $testCar970372432])

</x-layouts.app>