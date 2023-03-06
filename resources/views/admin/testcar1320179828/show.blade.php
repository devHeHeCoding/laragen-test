<x-layouts.app>


    <x-slot:title>
        <h1>

            {{ trans('global.show') }}
            {{ trans('cruds.test-car1320179828.title_singular') }}
        </h1>

    </x-slot:title>

    @livewire('test-car1320179828.show', ['testCar1320179828' => $testCar1320179828])

</x-layouts.app>