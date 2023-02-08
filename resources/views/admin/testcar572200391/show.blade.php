<x-layouts.app>


    <x-slot:title>
        <h1>

            {{ trans('global.show') }}
            {{ trans('cruds.test-car572200391.title_singular') }}
        </h1>

    </x-slot:title>

    @livewire('test-car572200391.show', ['testCar572200391' => $testCar572200391])

</x-layouts.app>