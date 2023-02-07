<x-layouts.app>

    <x-slot:title>    <h1>
        {{ trans('global.edit') }}
        {{ trans('cruds.test-car1729187173.title_singular') }}    </h1>
    </x-slot:title>
    @livewire('test-car1729187173.edit', ['testCar1729187173' => $testCar1729187173])

</x-layouts.app>