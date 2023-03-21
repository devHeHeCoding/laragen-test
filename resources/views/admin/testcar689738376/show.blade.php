<x-layouts.app>


    <x-slot:title>
        <h1>

            {{ trans('global.show') }}
            {{ trans('cruds.test-car689738376.title_singular') }}
        </h1>

    </x-slot:title>

    @livewire('test-car689738376.show', ['testCar689738376' => $testCar689738376])

</x-layouts.app>