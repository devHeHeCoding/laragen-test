<x-layouts.app>


    <x-slot:title>
        <h1>

            {{ trans('global.show') }}
            {{ trans('cruds.test-car1616682440.title_singular') }}
        </h1>

    </x-slot:title>

    @livewire('test-car1616682440.show', ['testCar1616682440' => $testCar1616682440])

</x-layouts.app>