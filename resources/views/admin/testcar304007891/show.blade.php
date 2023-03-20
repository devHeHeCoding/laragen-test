<x-layouts.app>


    <x-slot:title>
        <h1>

            {{ trans('global.show') }}
            {{ trans('cruds.test-car304007891.title_singular') }}
        </h1>

    </x-slot:title>

    @livewire('test-car304007891.show', ['testCar304007891' => $testCar304007891])

</x-layouts.app>