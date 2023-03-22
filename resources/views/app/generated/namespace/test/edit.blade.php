<x-layouts.app>

    <x-slot:title>    <h1>
        {{ trans('global.edit') }}
        {{ trans('cruds.test-car612343464.title_singular') }}    </h1>
    </x-slot:title>
    @livewire('namespace.test.edit', ['testCar612343464' => $testCar612343464])

</x-layouts.app>