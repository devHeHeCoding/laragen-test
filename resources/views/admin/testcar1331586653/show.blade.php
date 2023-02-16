<x-layouts.app>


    <x-slot:title>
        <h1>

            {{ trans('global.show') }}
            {{ trans('cruds.test-car1331586653.title_singular') }}
        </h1>

    </x-slot:title>

    @livewire('test-car1331586653.show', ['testCar1331586653' => $testCar1331586653])

</x-layouts.app>