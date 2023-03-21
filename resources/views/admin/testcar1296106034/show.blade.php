<x-layouts.app>


    <x-slot:title>
        <h1>

            {{ trans('global.show') }}
            {{ trans('cruds.test-car1296106034.title_singular') }}
        </h1>

    </x-slot:title>

    @livewire('test-car1296106034.show', ['testCar1296106034' => $testCar1296106034])

</x-layouts.app>