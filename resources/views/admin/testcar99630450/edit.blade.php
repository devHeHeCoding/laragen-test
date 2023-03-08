<x-layouts.app>

    <x-slot:title>    <h1>
        {{ trans('global.edit') }}
        {{ trans('cruds.test-car99630450.title_singular') }}    </h1>
    </x-slot:title>
    @livewire('test-car99630450.edit', ['testCar99630450' => $testCar99630450])

</x-layouts.app>