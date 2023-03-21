<x-layouts.app>


    <x-slot:title>
        <h1>

            {{ trans('global.show') }}
            {{ trans('cruds.test-car1196383960.title_singular') }}
        </h1>

    </x-slot:title>

    @livewire('test-car1196383960.show', ['testCar1196383960' => $testCar1196383960])

</x-layouts.app>