<x-layouts.app>

    <x-slot:title>    <h1>
        {{ trans('global.edit') }}
        {{ trans('cruds.test-car48801496.title_singular') }}    </h1>
    </x-slot:title>
    @livewire('test-car48801496.edit', ['testCar48801496' => $testCar48801496])

</x-layouts.app>