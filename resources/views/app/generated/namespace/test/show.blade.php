<x-layouts.app>


    <x-slot:title>
        <h1>

            {{ trans('global.show') }}
            {{ trans('cruds.test-car207063216.title_singular') }}
        </h1>

    </x-slot:title>

    @livewire('namespace.test.show', ['testCar207063216' => $testCar207063216])

</x-layouts.app>