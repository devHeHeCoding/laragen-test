<x-layouts.app>


    <x-slot:title>
        <h1>

            {{ trans('global.show') }}
            {{ trans('cruds.test-car565247789.title_singular') }}
        </h1>

    </x-slot:title>

    @livewire('test-car565247789.show', ['testCar565247789' => $testCar565247789])

</x-layouts.app>