<x-layouts.app>


    <x-slot:title>
        <h1>

            {{ trans('global.show') }}
            {{ trans('cruds.test-car540468406.title_singular') }}
        </h1>

    </x-slot:title>

    @livewire('test-car540468406.show', ['testCar540468406' => $testCar540468406])

</x-layouts.app>