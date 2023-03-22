<x-layouts.app>


    <x-slot:title>
        <h1>

            {{ trans('global.show') }}
            {{ trans('cruds.test-car547282329.title_singular') }}
        </h1>

    </x-slot:title>

    @livewire('namespace.test.show', ['testCar547282329' => $testCar547282329])

</x-layouts.app>