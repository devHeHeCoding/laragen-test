<x-layouts.app>


    <x-slot:title>
        <h1>

            {{ trans('global.show') }}
            {{ trans('cruds.test-car1788354338.title_singular') }}
        </h1>

    </x-slot:title>

    @livewire('test-car1788354338.show', ['testCar1788354338' => $testCar1788354338])

</x-layouts.app>