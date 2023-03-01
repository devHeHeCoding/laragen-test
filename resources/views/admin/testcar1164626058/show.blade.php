<x-layouts.app>


    <x-slot:title>
        <h1>

            {{ trans('global.show') }}
            {{ trans('cruds.test-car1164626058.title_singular') }}
        </h1>

    </x-slot:title>

    @livewire('test-car1164626058.show', ['testCar1164626058' => $testCar1164626058])

</x-layouts.app>