<x-layouts.app>


    <x-slot:title>
        <h1>

            {{ trans('global.show') }}
            {{ trans('cruds.test-car655714358.title_singular') }}
        </h1>

    </x-slot:title>

    @livewire('test-car655714358.show', ['testCar655714358' => $testCar655714358])

</x-layouts.app>