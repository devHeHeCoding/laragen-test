<x-layouts.app>


    <x-slot:title>
        <h1>

            {{ trans('global.show') }}
            {{ trans('cruds.test-car1780273142.title_singular') }}
        </h1>

    </x-slot:title>

    @livewire('test-car1780273142.show', ['testCar1780273142' => $testCar1780273142])

</x-layouts.app>