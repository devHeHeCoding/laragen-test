<x-layouts.app>


    <x-slot:title>
        <h1>

            {{ trans('global.show') }}
            {{ trans('cruds.test-car5020602.title_singular') }}
        </h1>

    </x-slot:title>

    @livewire('namespace.test.show', ['testCar5020602' => $testCar5020602])

</x-layouts.app>