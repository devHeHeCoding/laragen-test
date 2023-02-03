<x-layouts.app>

    <x-slot:title>    <h1>
        {{ trans('global.edit') }}
        {{ trans('cruds.test-car573271013.title_singular') }}    </h1>
    </x-slot:title>
    @livewire('test-car573271013.edit', ['testCar573271013' => $testCar573271013])

</x-layouts.app>