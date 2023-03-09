<x-layouts.app>

    <x-slot:title>    <h1>
        {{ trans('global.edit') }}
        {{ trans('cruds.test-car1704459636.title_singular') }}    </h1>
    </x-slot:title>
    @livewire('test-car1704459636.edit', ['testCar1704459636' => $testCar1704459636])

</x-layouts.app>