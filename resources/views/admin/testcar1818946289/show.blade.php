<x-layouts.app>


    <x-slot:title>
        <h1>

            {{ trans('global.show') }}
            {{ trans('cruds.test-car1818946289.title_singular') }}
        </h1>

    </x-slot:title>

    @livewire('test-car1818946289.show', ['testCar1818946289' => $testCar1818946289])

</x-layouts.app>