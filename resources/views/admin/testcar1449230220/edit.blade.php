<x-layouts.app>

    <x-slot:title>    <h1>
        {{ trans('global.edit') }}
        {{ trans('cruds.test-car1449230220.title_singular') }}    </h1>
    </x-slot:title>
    @livewire('test-car1449230220.edit', ['testCar1449230220' => $testCar1449230220])

</x-layouts.app>