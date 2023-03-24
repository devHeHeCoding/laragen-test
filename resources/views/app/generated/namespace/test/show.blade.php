<x-layouts.app>


    <x-slot:title>
        <h1>

            {{ trans('global.show') }}
            {{ trans('cruds.test-car147244030.title_singular') }}
        </h1>

    </x-slot:title>

    @livewire('namespace.test.show', ['testCar147244030' => $testCar147244030])

</x-layouts.app>