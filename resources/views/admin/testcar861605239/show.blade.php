<x-layouts.app>


    <x-slot:title>
        <h1>

            {{ trans('global.show') }}
            {{ trans('cruds.test-car861605239.title_singular') }}
        </h1>

    </x-slot:title>

    @livewire('test-car861605239.show', ['testCar861605239' => $testCar861605239])

</x-layouts.app>