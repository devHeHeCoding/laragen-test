<x-layouts.app>


    <x-slot:title>
        <h1>

            {{ trans('global.show') }}
            {{ trans('cruds.test-car154622430.title_singular') }}
        </h1>

    </x-slot:title>

    @livewire('test-car154622430.show', ['testCar154622430' => $testCar154622430])

</x-layouts.app>