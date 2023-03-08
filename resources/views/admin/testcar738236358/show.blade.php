<x-layouts.app>


    <x-slot:title>
        <h1>

            {{ trans('global.show') }}
            {{ trans('cruds.test-car738236358.title_singular') }}
        </h1>

    </x-slot:title>

    @livewire('test-car738236358.show', ['testCar738236358' => $testCar738236358])

</x-layouts.app>