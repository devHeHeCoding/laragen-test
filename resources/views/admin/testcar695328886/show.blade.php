<x-layouts.app>


    <x-slot:title>
        <h1>

            {{ trans('global.show') }}
            {{ trans('cruds.test-car695328886.title_singular') }}
        </h1>

    </x-slot:title>

    @livewire('test-car695328886.show', ['testCar695328886' => $testCar695328886])

</x-layouts.app>