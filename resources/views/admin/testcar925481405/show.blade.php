<x-layouts.app>


    <x-slot:title>
        <h1>

            {{ trans('global.show') }}
            {{ trans('cruds.test-car925481405.title_singular') }}
        </h1>

    </x-slot:title>

    @livewire('test-car925481405.show', ['testCar925481405' => $testCar925481405])

</x-layouts.app>