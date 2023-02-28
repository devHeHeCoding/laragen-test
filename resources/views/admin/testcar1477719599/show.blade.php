<x-layouts.app>


    <x-slot:title>
        <h1>

            {{ trans('global.show') }}
            {{ trans('cruds.test-car1477719599.title_singular') }}
        </h1>

    </x-slot:title>

    @livewire('test-car1477719599.show', ['testCar1477719599' => $testCar1477719599])

</x-layouts.app>