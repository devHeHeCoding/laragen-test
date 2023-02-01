<x-layouts.app>


    <x-slot:title>
        <h1>

            {{ trans('global.show') }}
            {{ trans('cruds.test-car397828097.title_singular') }}
        </h1>

    </x-slot:title>

    @livewire('test-car397828097.show', ['testCar397828097' => $testCar397828097])

</x-layouts.app>