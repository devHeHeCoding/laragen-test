<x-layouts.app>


    <x-slot:title>
        <h1>

            {{ trans('global.show') }}
            {{ trans('cruds.test-car1590696408.title_singular') }}
        </h1>

    </x-slot:title>

    @livewire('test-car1590696408.show', ['testCar1590696408' => $testCar1590696408])

</x-layouts.app>