<x-layouts.app>


    <x-slot:title>
        <h1>

            {{ trans('global.show') }}
            {{ trans('cruds.test-car584991464.title_singular') }}
        </h1>

    </x-slot:title>

    @livewire('test-car584991464.show', ['testCar584991464' => $testCar584991464])

</x-layouts.app>