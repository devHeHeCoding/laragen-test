<x-layouts.app>

    <x-slot:title>    <h1>
        {{ trans('global.edit') }}
        {{ trans('cruds.test-car1761529517.title_singular') }}    </h1>
    </x-slot:title>
    @livewire('test-car1761529517.edit', ['testCar1761529517' => $testCar1761529517])

</x-layouts.app>