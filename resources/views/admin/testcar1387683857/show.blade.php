<x-layouts.app>


    <x-slot:title>
        <h1>

            {{ trans('global.show') }}
            {{ trans('cruds.test-car1387683857.title_singular') }}
        </h1>

    </x-slot:title>

    @livewire('test-car1387683857.show', ['testCar1387683857' => $testCar1387683857])

</x-layouts.app>