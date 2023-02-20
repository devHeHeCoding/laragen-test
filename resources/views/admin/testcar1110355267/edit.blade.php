<x-layouts.app>

    <x-slot:title>    <h1>
        {{ trans('global.edit') }}
        {{ trans('cruds.test-car1110355267.title_singular') }}    </h1>
    </x-slot:title>
    @livewire('test-car1110355267.edit', ['testCar1110355267' => $testCar1110355267])

</x-layouts.app>