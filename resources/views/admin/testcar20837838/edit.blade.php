<x-layouts.app>

    <x-slot:title>    <h1>
        {{ trans('global.edit') }}
        {{ trans('cruds.test-car20837838.title_singular') }}    </h1>
    </x-slot:title>
    @livewire('test-car20837838.edit', ['testCar20837838' => $testCar20837838])

</x-layouts.app>