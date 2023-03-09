<x-layouts.app>


    <x-slot:title>
        <h1>

            {{ trans('global.show') }}
            {{ trans('cruds.test-car738781303.title_singular') }}
        </h1>

    </x-slot:title>

    @livewire('test-car738781303.show', ['testCar738781303' => $testCar738781303])

</x-layouts.app>