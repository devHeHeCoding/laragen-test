<x-layouts.app>


    <x-slot:title>
        <h1>

            {{ trans('global.show') }}
            {{ trans('cruds.test-car1499312371.title_singular') }}
        </h1>

    </x-slot:title>

    @livewire('test-car1499312371.show', ['testCar1499312371' => $testCar1499312371])

</x-layouts.app>