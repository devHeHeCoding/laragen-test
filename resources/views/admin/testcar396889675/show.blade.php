<x-layouts.app>


    <x-slot:title>
        <h1>

            {{ trans('global.show') }}
            {{ trans('cruds.test-car396889675.title_singular') }}
        </h1>

    </x-slot:title>

    @livewire('test-car396889675.show', ['testCar396889675' => $testCar396889675])

</x-layouts.app>