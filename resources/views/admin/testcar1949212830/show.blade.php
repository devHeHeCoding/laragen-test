<x-layouts.app>


    <x-slot:title>
        <h1>

            {{ trans('global.show') }}
            {{ trans('cruds.test-car1949212830.title_singular') }}
        </h1>

    </x-slot:title>

    @livewire('test-car1949212830.show', ['testCar1949212830' => $testCar1949212830])

</x-layouts.app>