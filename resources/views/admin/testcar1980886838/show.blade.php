<x-layouts.app>


    <x-slot:title>
        <h1>

            {{ trans('global.show') }}
            {{ trans('cruds.test-car1980886838.title_singular') }}
        </h1>

    </x-slot:title>

    @livewire('test-car1980886838.show', ['testCar1980886838' => $testCar1980886838])

</x-layouts.app>