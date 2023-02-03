<x-layouts.app>

    <x-slot:title>    <h1>
        {{ trans('global.edit') }}
        {{ trans('cruds.test-car695328886.title_singular') }}    </h1>
    </x-slot:title>
    @livewire('test-car695328886.edit', ['testCar695328886' => $testCar695328886])

</x-layouts.app>