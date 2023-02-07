<x-layouts.app>


    <x-slot:title>
        <h1>

            {{ trans('global.show') }}
            {{ trans('cruds.test-car385831353.title_singular') }}
        </h1>

    </x-slot:title>

    @livewire('test-car385831353.show', ['testCar385831353' => $testCar385831353])

</x-layouts.app>