<x-layouts.app>


    <x-slot:title>
        <h1>

            {{ trans('global.show') }}
            {{ trans('cruds.test-car1570150971.title_singular') }}
        </h1>

    </x-slot:title>

    @livewire('test-car1570150971.show', ['testCar1570150971' => $testCar1570150971])

</x-layouts.app>