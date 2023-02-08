<x-layouts.app>


    <x-slot:title>
        <h1>

            {{ trans('global.show') }}
            {{ trans('cruds.test-car584339812.title_singular') }}
        </h1>

    </x-slot:title>

    @livewire('test-car584339812.show', ['testCar584339812' => $testCar584339812])

</x-layouts.app>