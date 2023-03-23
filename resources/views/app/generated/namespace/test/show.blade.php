<x-layouts.app>


    <x-slot:title>
        <h1>

            {{ trans('global.show') }}
            {{ trans('cruds.test-car733822276.title_singular') }}
        </h1>

    </x-slot:title>

    @livewire('namespace.test.show', ['testCar733822276' => $testCar733822276])

</x-layouts.app>