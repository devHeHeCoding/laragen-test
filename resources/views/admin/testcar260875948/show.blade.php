<x-layouts.app>


    <x-slot:title>
        <h1>

            {{ trans('global.show') }}
            {{ trans('cruds.test-car260875948.title_singular') }}
        </h1>

    </x-slot:title>

    @livewire('test-car260875948.show', ['testCar260875948' => $testCar260875948])

</x-layouts.app>