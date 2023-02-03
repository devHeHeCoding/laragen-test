<x-layouts.app>

    <x-slot:title>    <h1>
        {{ trans('global.edit') }}
        {{ trans('cruds.test-car1083031205.title_singular') }}    </h1>
    </x-slot:title>
    @livewire('test-car1083031205.edit', ['testCar1083031205' => $testCar1083031205])

</x-layouts.app>