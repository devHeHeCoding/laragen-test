<x-layouts.app>

    <x-slot:title>    <h1>
        {{ trans('global.edit') }}
        {{ trans('cruds.test-car533183347.title_singular') }}    </h1>
    </x-slot:title>
    @livewire('test-car533183347.edit', ['testCar533183347' => $testCar533183347])

</x-layouts.app>