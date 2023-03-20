<x-layouts.app>


    <x-slot:title>
        <h1>

            {{ trans('global.show') }}
            {{ trans('cruds.test-car795180617.title_singular') }}
        </h1>

    </x-slot:title>

    @livewire('test-car795180617.show', ['testCar795180617' => $testCar795180617])

</x-layouts.app>