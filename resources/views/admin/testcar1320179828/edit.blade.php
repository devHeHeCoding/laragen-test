<x-layouts.app>

    <x-slot:title>    <h1>
        {{ trans('global.edit') }}
        {{ trans('cruds.test-car1320179828.title_singular') }}    </h1>
    </x-slot:title>
    @livewire('test-car1320179828.edit', ['testCar1320179828' => $testCar1320179828])

</x-layouts.app>