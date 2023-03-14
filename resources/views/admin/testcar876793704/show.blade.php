<x-layouts.app>


    <x-slot:title>
        <h1>

            {{ trans('global.show') }}
            {{ trans('cruds.test-car876793704.title_singular') }}
        </h1>

    </x-slot:title>

    @livewire('test-car876793704.show', ['testCar876793704' => $testCar876793704])

</x-layouts.app>