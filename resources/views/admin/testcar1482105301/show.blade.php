<x-layouts.app>


    <x-slot:title>
        <h1>

            {{ trans('global.show') }}
            {{ trans('cruds.test-car1482105301.title_singular') }}
        </h1>

    </x-slot:title>

    @livewire('test-car1482105301.show', ['testCar1482105301' => $testCar1482105301])

</x-layouts.app>