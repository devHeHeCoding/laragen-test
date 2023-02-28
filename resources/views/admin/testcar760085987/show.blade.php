<x-layouts.app>


    <x-slot:title>
        <h1>

            {{ trans('global.show') }}
            {{ trans('cruds.test-car760085987.title_singular') }}
        </h1>

    </x-slot:title>

    @livewire('test-car760085987.show', ['testCar760085987' => $testCar760085987])

</x-layouts.app>