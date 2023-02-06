<x-layouts.app>


    <x-slot:title>
        <h1>

            {{ trans('global.show') }}
            {{ trans('cruds.test-car1323929317.title_singular') }}
        </h1>

    </x-slot:title>

    @livewire('test-car1323929317.show', ['testCar1323929317' => $testCar1323929317])

</x-layouts.app>