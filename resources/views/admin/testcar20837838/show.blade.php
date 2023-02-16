<x-layouts.app>


    <x-slot:title>
        <h1>

            {{ trans('global.show') }}
            {{ trans('cruds.test-car20837838.title_singular') }}
        </h1>

    </x-slot:title>

    @livewire('test-car20837838.show', ['testCar20837838' => $testCar20837838])

</x-layouts.app>