<x-layouts.app>


    <x-slot:title>
        <h1>

            {{ trans('global.show') }}
            {{ trans('cruds.test-car556394034.title_singular') }}
        </h1>

    </x-slot:title>

    @livewire('test-car556394034.show', ['testCar556394034' => $testCar556394034])

</x-layouts.app>