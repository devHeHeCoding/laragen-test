<x-layouts.app>


    <x-slot:title>
        <h1>

            {{ trans('global.show') }}
            {{ trans('cruds.test-car175351433.title_singular') }}
        </h1>

    </x-slot:title>

    @livewire('test-car175351433.show', ['testCar175351433' => $testCar175351433])

</x-layouts.app>