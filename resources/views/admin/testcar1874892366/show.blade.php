<x-layouts.app>


    <x-slot:title>
        <h1>

            {{ trans('global.show') }}
            {{ trans('cruds.test-car1874892366.title_singular') }}
        </h1>

    </x-slot:title>

    @livewire('test-car1874892366.show', ['testCar1874892366' => $testCar1874892366])

</x-layouts.app>