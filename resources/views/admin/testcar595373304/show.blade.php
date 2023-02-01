<x-layouts.app>


    <x-slot:title>
        <h1>

            {{ trans('global.show') }}
            {{ trans('cruds.test-car595373304.title_singular') }}
        </h1>

    </x-slot:title>

    @livewire('test-car595373304.show', ['testCar595373304' => $testCar595373304])

</x-layouts.app>