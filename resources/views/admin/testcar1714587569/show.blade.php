<x-layouts.app>


    <x-slot:title>
        <h1>

            {{ trans('global.show') }}
            {{ trans('cruds.test-car1714587569.title_singular') }}
        </h1>

    </x-slot:title>

    @livewire('test-car1714587569.show', ['testCar1714587569' => $testCar1714587569])

</x-layouts.app>