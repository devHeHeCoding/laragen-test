<x-layouts.app>


    <x-slot:title>
        <h1>

            {{ trans('global.show') }}
            {{ trans('cruds.test-car1910293284.title_singular') }}
        </h1>

    </x-slot:title>

    @livewire('test-car1910293284.show', ['testCar1910293284' => $testCar1910293284])

</x-layouts.app>