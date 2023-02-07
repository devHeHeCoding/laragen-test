<x-layouts.app>


    <x-slot:title>
        <h1>

            {{ trans('global.show') }}
            {{ trans('cruds.test-car231076716.title_singular') }}
        </h1>

    </x-slot:title>

    @livewire('test-car231076716.show', ['testCar231076716' => $testCar231076716])

</x-layouts.app>