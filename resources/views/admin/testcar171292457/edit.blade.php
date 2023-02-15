<x-layouts.app>

    <x-slot:title>    <h1>
        {{ trans('global.edit') }}
        {{ trans('cruds.test-car171292457.title_singular') }}    </h1>
    </x-slot:title>
    @livewire('test-car171292457.edit', ['testCar171292457' => $testCar171292457])

</x-layouts.app>