<x-layouts.app>


    <x-slot:title>
        <h1>

            {{ trans('global.show') }}
            {{ trans('cruds.test-car177062726.title_singular') }}
        </h1>

    </x-slot:title>

    @livewire('test-car177062726.show', ['testCar177062726' => $testCar177062726])

</x-layouts.app>