<x-layouts.app>


    <x-slot:title>
        <h1>

            {{ trans('global.show') }}
            {{ trans('cruds.test-car467464683.title_singular') }}
        </h1>

    </x-slot:title>

    @livewire('namespace.test.show', ['testCar467464683' => $testCar467464683])

</x-layouts.app>