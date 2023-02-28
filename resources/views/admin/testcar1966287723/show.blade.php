<x-layouts.app>


    <x-slot:title>
        <h1>

            {{ trans('global.show') }}
            {{ trans('cruds.test-car1966287723.title_singular') }}
        </h1>

    </x-slot:title>

    @livewire('test-car1966287723.show', ['testCar1966287723' => $testCar1966287723])

</x-layouts.app>