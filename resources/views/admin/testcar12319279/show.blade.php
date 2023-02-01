<x-layouts.app>


    <x-slot:title>
        <h1>

            {{ trans('global.show') }}
            {{ trans('cruds.test-car12319279.title_singular') }}
        </h1>

    </x-slot:title>

    @livewire('test-car12319279.show', ['testCar12319279' => $testCar12319279])

</x-layouts.app>