<x-layouts.app>


    <x-slot:title>
        <h1>

            {{ trans('global.show') }}
            {{ trans('cruds.test-car1921867778.title_singular') }}
        </h1>

    </x-slot:title>

    @livewire('test-car1921867778.show', ['testCar1921867778' => $testCar1921867778])

</x-layouts.app>