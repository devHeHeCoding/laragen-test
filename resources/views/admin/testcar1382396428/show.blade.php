<x-layouts.app>


    <x-slot:title>
        <h1>

            {{ trans('global.show') }}
            {{ trans('cruds.test-car1382396428.title_singular') }}
        </h1>

    </x-slot:title>

    @livewire('test-car1382396428.show', ['testCar1382396428' => $testCar1382396428])

</x-layouts.app>