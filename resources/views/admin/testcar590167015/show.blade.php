<x-layouts.app>


    <x-slot:title>
        <h1>

            {{ trans('global.show') }}
            {{ trans('cruds.test-car590167015.title_singular') }}
        </h1>

    </x-slot:title>

    @livewire('test-car590167015.show', ['testCar590167015' => $testCar590167015])

</x-layouts.app>