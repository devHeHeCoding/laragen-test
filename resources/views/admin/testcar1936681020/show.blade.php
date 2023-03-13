<x-layouts.app>


    <x-slot:title>
        <h1>

            {{ trans('global.show') }}
            {{ trans('cruds.test-car1936681020.title_singular') }}
        </h1>

    </x-slot:title>

    @livewire('test-car1936681020.show', ['testCar1936681020' => $testCar1936681020])

</x-layouts.app>