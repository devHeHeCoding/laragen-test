<x-layouts.app>


    <x-slot:title>
        <h1>

            {{ trans('global.show') }}
            {{ trans('cruds.test-car153111807.title_singular') }}
        </h1>

    </x-slot:title>

    @livewire('test-car153111807.show', ['testCar153111807' => $testCar153111807])

</x-layouts.app>