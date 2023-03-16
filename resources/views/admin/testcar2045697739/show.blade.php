<x-layouts.app>


    <x-slot:title>
        <h1>

            {{ trans('global.show') }}
            {{ trans('cruds.test-car2045697739.title_singular') }}
        </h1>

    </x-slot:title>

    @livewire('test-car2045697739.show', ['testCar2045697739' => $testCar2045697739])

</x-layouts.app>