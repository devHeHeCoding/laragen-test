<x-layouts.app>


    <x-slot:title>
        <h1>

            {{ trans('global.show') }}
            {{ trans('cruds.test-car2033733895.title_singular') }}
        </h1>

    </x-slot:title>

    @livewire('test-car2033733895.show', ['testCar2033733895' => $testCar2033733895])

</x-layouts.app>