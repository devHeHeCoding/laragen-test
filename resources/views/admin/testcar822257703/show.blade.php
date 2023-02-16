<x-layouts.app>


    <x-slot:title>
        <h1>

            {{ trans('global.show') }}
            {{ trans('cruds.test-car822257703.title_singular') }}
        </h1>

    </x-slot:title>

    @livewire('test-car822257703.show', ['testCar822257703' => $testCar822257703])

</x-layouts.app>