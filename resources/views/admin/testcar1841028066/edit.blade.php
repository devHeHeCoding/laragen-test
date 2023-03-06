<x-layouts.app>

    <x-slot:title>    <h1>
        {{ trans('global.edit') }}
        {{ trans('cruds.test-car1841028066.title_singular') }}    </h1>
    </x-slot:title>
    @livewire('test-car1841028066.edit', ['testCar1841028066' => $testCar1841028066])

</x-layouts.app>