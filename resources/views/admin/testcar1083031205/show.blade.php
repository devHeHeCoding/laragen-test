<x-layouts.app>


    <x-slot:title>
        <h1>

            {{ trans('global.show') }}
            {{ trans('cruds.test-car1083031205.title_singular') }}
        </h1>

    </x-slot:title>

    @livewire('test-car1083031205.show', ['testCar1083031205' => $testCar1083031205])

</x-layouts.app>