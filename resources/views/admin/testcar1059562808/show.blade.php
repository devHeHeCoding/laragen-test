<x-layouts.app>


    <x-slot:title>
        <h1>

            {{ trans('global.show') }}
            {{ trans('cruds.test-car1059562808.title_singular') }}
        </h1>

    </x-slot:title>

    @livewire('test-car1059562808.show', ['testCar1059562808' => $testCar1059562808])

</x-layouts.app>