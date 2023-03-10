<x-layouts.app>


    <x-slot:title>
        <h1>

            {{ trans('global.show') }}
            {{ trans('cruds.test-car163136273.title_singular') }}
        </h1>

    </x-slot:title>

    @livewire('test-car163136273.show', ['testCar163136273' => $testCar163136273])

</x-layouts.app>