<x-layouts.app>


    <x-slot:title>
        <h1>

            {{ trans('global.show') }}
            {{ trans('cruds.test-car1097222783.title_singular') }}
        </h1>

    </x-slot:title>

    @livewire('test-car1097222783.show', ['testCar1097222783' => $testCar1097222783])

</x-layouts.app>