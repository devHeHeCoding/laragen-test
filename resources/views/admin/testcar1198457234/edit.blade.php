<x-layouts.app>

    <x-slot:title>    <h1>
        {{ trans('global.edit') }}
        {{ trans('cruds.test-car1198457234.title_singular') }}    </h1>
    </x-slot:title>
    @livewire('test-car1198457234.edit', ['testCar1198457234' => $testCar1198457234])

</x-layouts.app>