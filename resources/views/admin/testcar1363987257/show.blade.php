<x-layouts.app>


    <x-slot:title>
        <h1>

            {{ trans('global.show') }}
            {{ trans('cruds.test-car1363987257.title_singular') }}
        </h1>

    </x-slot:title>

    @livewire('test-car1363987257.show', ['testCar1363987257' => $testCar1363987257])

</x-layouts.app>