<x-layouts.app>

    <x-slot:title>    <h1>
        {{ trans('global.edit') }}
        {{ trans('cruds.test-car2074418549.title_singular') }}    </h1>
    </x-slot:title>
    @livewire('test-car2074418549.edit', ['testCar2074418549' => $testCar2074418549])

</x-layouts.app>