<x-layouts.app>

    <x-slot:title>    <h1>
        {{ trans('global.edit') }}
        {{ trans('cruds.test-car856968336.title_singular') }}    </h1>
    </x-slot:title>
    @livewire('test-car856968336.edit', ['testCar856968336' => $testCar856968336])

</x-layouts.app>