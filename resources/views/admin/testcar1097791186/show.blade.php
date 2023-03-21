<x-layouts.app>


    <x-slot:title>
        <h1>

            {{ trans('global.show') }}
            {{ trans('cruds.test-car1097791186.title_singular') }}
        </h1>

    </x-slot:title>

    @livewire('test-car1097791186.show', ['testCar1097791186' => $testCar1097791186])

</x-layouts.app>