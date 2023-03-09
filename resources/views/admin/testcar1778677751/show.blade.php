<x-layouts.app>


    <x-slot:title>
        <h1>

            {{ trans('global.show') }}
            {{ trans('cruds.test-car1778677751.title_singular') }}
        </h1>

    </x-slot:title>

    @livewire('test-car1778677751.show', ['testCar1778677751' => $testCar1778677751])

</x-layouts.app>