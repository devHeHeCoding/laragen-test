<x-layouts.app>

    <x-slot:title>    <h1>
        {{ trans('global.edit') }}
        {{ trans('cruds.test-car1780273142.title_singular') }}    </h1>
    </x-slot:title>
    @livewire('test-car1780273142.edit', ['testCar1780273142' => $testCar1780273142])

</x-layouts.app>