<x-layouts.app>

    <x-slot:title>    <h1>
        {{ trans('global.edit') }}
        {{ trans('cruds.test-car342094486.title_singular') }}    </h1>
    </x-slot:title>
    @livewire('test-car342094486.edit', ['testCar342094486' => $testCar342094486])

</x-layouts.app>