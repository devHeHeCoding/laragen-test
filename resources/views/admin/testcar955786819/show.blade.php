<x-layouts.app>


    <x-slot:title>
        <h1>

            {{ trans('global.show') }}
            {{ trans('cruds.test-car955786819.title_singular') }}
        </h1>

    </x-slot:title>

    @livewire('test-car955786819.show', ['testCar955786819' => $testCar955786819])

</x-layouts.app>