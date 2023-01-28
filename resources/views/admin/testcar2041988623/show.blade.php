<x-layouts.app>


    <x-slot:title>
        <h1>

            {{ trans('global.show') }}
            {{ trans('cruds.test-car2041988623.title_singular') }}
        </h1>

    </x-slot:title>

    @livewire('test-car2041988623.show', ['testCar2041988623' => $testCar2041988623])

</x-layouts.app>