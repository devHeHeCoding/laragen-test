<x-layouts.app>


    <x-slot:title>
        <h1>

            {{ trans('global.show') }}
            {{ trans('cruds.test-car742407724.title_singular') }}
        </h1>

    </x-slot:title>

    @livewire('test-car742407724.show', ['testCar742407724' => $testCar742407724])

</x-layouts.app>