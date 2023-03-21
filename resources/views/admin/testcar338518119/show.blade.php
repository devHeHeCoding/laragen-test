<x-layouts.app>


    <x-slot:title>
        <h1>

            {{ trans('global.show') }}
            {{ trans('cruds.test-car338518119.title_singular') }}
        </h1>

    </x-slot:title>

    @livewire('test-car338518119.show', ['testCar338518119' => $testCar338518119])

</x-layouts.app>