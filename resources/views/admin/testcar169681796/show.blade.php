<x-layouts.app>


    <x-slot:title>
        <h1>

            {{ trans('global.show') }}
            {{ trans('cruds.test-car169681796.title_singular') }}
        </h1>

    </x-slot:title>

    @livewire('test-car169681796.show', ['testCar169681796' => $testCar169681796])

</x-layouts.app>