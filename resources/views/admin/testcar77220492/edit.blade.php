<x-layouts.app>

    <x-slot:title>    <h1>
        {{ trans('global.edit') }}
        {{ trans('cruds.test-car77220492.title_singular') }}    </h1>
    </x-slot:title>
    @livewire('test-car77220492.edit', ['testCar77220492' => $testCar77220492])

</x-layouts.app>