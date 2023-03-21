<x-layouts.app>


    <x-slot:title>
        <h1>

            {{ trans('global.show') }}
            {{ trans('cruds.test-car1347878297.title_singular') }}
        </h1>

    </x-slot:title>

    @livewire('test-car1347878297.show', ['testCar1347878297' => $testCar1347878297])

</x-layouts.app>