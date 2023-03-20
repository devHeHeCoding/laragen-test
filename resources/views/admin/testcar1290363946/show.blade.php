<x-layouts.app>


    <x-slot:title>
        <h1>

            {{ trans('global.show') }}
            {{ trans('cruds.test-car1290363946.title_singular') }}
        </h1>

    </x-slot:title>

    @livewire('test-car1290363946.show', ['testCar1290363946' => $testCar1290363946])

</x-layouts.app>