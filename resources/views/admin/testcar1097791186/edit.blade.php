<x-layouts.app>

    <x-slot:title>    <h1>
        {{ trans('global.edit') }}
        {{ trans('cruds.test-car1097791186.title_singular') }}    </h1>
    </x-slot:title>
    @livewire('test-car1097791186.edit', ['testCar1097791186' => $testCar1097791186])

</x-layouts.app>