<x-layouts.app>


    <x-slot:title>
        <h1>

            {{ trans('global.show') }}
            {{ trans('cruds.test-car1376813211.title_singular') }}
        </h1>

    </x-slot:title>

    @livewire('test-car1376813211.show', ['testCar1376813211' => $testCar1376813211])

</x-layouts.app>