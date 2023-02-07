<x-layouts.app>

    <x-slot:title>    <h1>
        {{ trans('global.edit') }}
        {{ trans('cruds.test-car231076716.title_singular') }}    </h1>
    </x-slot:title>
    @livewire('test-car231076716.edit', ['testCar231076716' => $testCar231076716])

</x-layouts.app>