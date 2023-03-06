<x-layouts.app>

    <x-slot:title>    <h1>
        {{ trans('global.edit') }}
        {{ trans('cruds.test-car1044631486.title_singular') }}    </h1>
    </x-slot:title>
    @livewire('test-car1044631486.edit', ['testCar1044631486' => $testCar1044631486])

</x-layouts.app>