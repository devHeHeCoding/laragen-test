<x-layouts.app>

    <x-slot:title>    <h1>
        {{ trans('global.edit') }}
        {{ trans('cruds.test-car252691639.title_singular') }}    </h1>
    </x-slot:title>
    @livewire('test-car252691639.edit', ['testCar252691639' => $testCar252691639])

</x-layouts.app>