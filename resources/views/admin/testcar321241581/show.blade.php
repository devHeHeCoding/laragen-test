<x-layouts.app>


    <x-slot:title>
        <h1>

            {{ trans('global.show') }}
            {{ trans('cruds.test-car321241581.title_singular') }}
        </h1>

    </x-slot:title>

    @livewire('test-car321241581.show', ['testCar321241581' => $testCar321241581])

</x-layouts.app>