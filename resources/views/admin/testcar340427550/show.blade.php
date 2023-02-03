<x-layouts.app>


    <x-slot:title>
        <h1>

            {{ trans('global.show') }}
            {{ trans('cruds.test-car340427550.title_singular') }}
        </h1>

    </x-slot:title>

    @livewire('test-car340427550.show', ['testCar340427550' => $testCar340427550])

</x-layouts.app>