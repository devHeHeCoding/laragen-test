<x-layouts.app>


    <x-slot:title>
        <h1>

            {{ trans('global.show') }}
            {{ trans('cruds.test-car1975829433.title_singular') }}
        </h1>

    </x-slot:title>

    @livewire('test-car1975829433.show', ['testCar1975829433' => $testCar1975829433])

</x-layouts.app>