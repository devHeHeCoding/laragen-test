<x-layouts.app>


    <x-slot:title>
        <h1>

            {{ trans('global.show') }}
            {{ trans('cruds.test-car1159592761.title_singular') }}
        </h1>

    </x-slot:title>

    @livewire('test-car1159592761.show', ['testCar1159592761' => $testCar1159592761])

</x-layouts.app>