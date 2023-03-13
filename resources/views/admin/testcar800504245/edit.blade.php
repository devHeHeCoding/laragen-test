<x-layouts.app>

    <x-slot:title>    <h1>
        {{ trans('global.edit') }}
        {{ trans('cruds.test-car800504245.title_singular') }}    </h1>
    </x-slot:title>
    @livewire('test-car800504245.edit', ['testCar800504245' => $testCar800504245])

</x-layouts.app>