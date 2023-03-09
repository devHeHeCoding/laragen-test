<x-layouts.app>


    <x-slot:title>
        <h1>

            {{ trans('global.show') }}
            {{ trans('cruds.test-car309064133.title_singular') }}
        </h1>

    </x-slot:title>

    @livewire('test-car309064133.show', ['testCar309064133' => $testCar309064133])

</x-layouts.app>