<x-layouts.app>


    <x-slot:title>
        <h1>

            {{ trans('global.show') }}
            {{ trans('cruds.test-car2110186441.title_singular') }}
        </h1>

    </x-slot:title>

    @livewire('test-car2110186441.show', ['testCar2110186441' => $testCar2110186441])

</x-layouts.app>