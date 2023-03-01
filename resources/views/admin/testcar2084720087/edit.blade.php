<x-layouts.app>

    <x-slot:title>    <h1>
        {{ trans('global.edit') }}
        {{ trans('cruds.test-car2084720087.title_singular') }}    </h1>
    </x-slot:title>
    @livewire('test-car2084720087.edit', ['testCar2084720087' => $testCar2084720087])

</x-layouts.app>