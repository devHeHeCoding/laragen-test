<x-layouts.app>

    <x-slot:title>    <h1>
        {{ trans('global.edit') }}
        {{ trans('cruds.test-car457912317.title_singular') }}    </h1>
    </x-slot:title>
    @livewire('test-car457912317.edit', ['testCar457912317' => $testCar457912317])

</x-layouts.app>