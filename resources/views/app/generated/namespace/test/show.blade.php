<x-layouts.app>


    <x-slot:title>
        <h1>

            {{ trans('global.show') }}
            {{ trans('cruds.test-car23802103.title_singular') }}
        </h1>

    </x-slot:title>

    @livewire('namespace.test.show', ['testCar23802103' => $testCar23802103])

</x-layouts.app>