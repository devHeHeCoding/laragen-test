<x-layouts.app>


    <x-slot:title>
        <h1>

            {{ trans('global.show') }}
            {{ trans('cruds.test-car1105510463.title_singular') }}
        </h1>

    </x-slot:title>

    @livewire('test-car1105510463.show', ['testCar1105510463' => $testCar1105510463])

</x-layouts.app>