<x-layouts.app>


    <x-slot:title>
        <h1>

            {{ trans('global.show') }}
            {{ trans('cruds.test-car1215803700.title_singular') }}
        </h1>

    </x-slot:title>

    @livewire('test-car1215803700.show', ['testCar1215803700' => $testCar1215803700])

</x-layouts.app>