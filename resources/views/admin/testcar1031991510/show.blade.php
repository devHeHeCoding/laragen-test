<x-layouts.app>


    <x-slot:title>
        <h1>

            {{ trans('global.show') }}
            {{ trans('cruds.test-car1031991510.title_singular') }}
        </h1>

    </x-slot:title>

    @livewire('test-car1031991510.show', ['testCar1031991510' => $testCar1031991510])

</x-layouts.app>