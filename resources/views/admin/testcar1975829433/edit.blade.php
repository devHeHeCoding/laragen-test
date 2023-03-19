<x-layouts.app>

    <x-slot:title>    <h1>
        {{ trans('global.edit') }}
        {{ trans('cruds.test-car1975829433.title_singular') }}    </h1>
    </x-slot:title>
    @livewire('test-car1975829433.edit', ['testCar1975829433' => $testCar1975829433])

</x-layouts.app>