<x-layouts.app>

    <x-slot:title>    <h1>
        {{ trans('global.edit') }}
        {{ trans('cruds.test-car1901881825.title_singular') }}    </h1>
    </x-slot:title>
    @livewire('namespace.test.edit', ['testCar1901881825' => $testCar1901881825])

</x-layouts.app>