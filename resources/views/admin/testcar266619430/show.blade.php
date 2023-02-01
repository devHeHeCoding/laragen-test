<x-layouts.app>


    <x-slot:title>
        <h1>

            {{ trans('global.show') }}
            {{ trans('cruds.test-car266619430.title_singular') }}
        </h1>

    </x-slot:title>

    @livewire('test-car266619430.show', ['testCar266619430' => $testCar266619430])

</x-layouts.app>