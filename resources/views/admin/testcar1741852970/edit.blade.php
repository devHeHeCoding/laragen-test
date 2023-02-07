<x-layouts.app>

    <x-slot:title>    <h1>
        {{ trans('global.edit') }}
        {{ trans('cruds.test-car1741852970.title_singular') }}    </h1>
    </x-slot:title>
    @livewire('test-car1741852970.edit', ['testCar1741852970' => $testCar1741852970])

</x-layouts.app>