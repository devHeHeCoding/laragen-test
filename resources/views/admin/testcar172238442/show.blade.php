<x-layouts.app>


    <x-slot:title>
        <h1>

            {{ trans('global.show') }}
            {{ trans('cruds.test-car172238442.title_singular') }}
        </h1>

    </x-slot:title>

    @livewire('test-car172238442.show', ['testCar172238442' => $testCar172238442])

</x-layouts.app>