<x-layouts.app>

    <x-slot:title>    <h1>
        {{ trans('global.edit') }}
        {{ trans('cruds.test-car818681802.title_singular') }}    </h1>
    </x-slot:title>
    @livewire('test-car818681802.edit', ['testCar818681802' => $testCar818681802])

</x-layouts.app>