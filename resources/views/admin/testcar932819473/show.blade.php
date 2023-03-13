<x-layouts.app>


    <x-slot:title>
        <h1>

            {{ trans('global.show') }}
            {{ trans('cruds.test-car932819473.title_singular') }}
        </h1>

    </x-slot:title>

    @livewire('test-car932819473.show', ['testCar932819473' => $testCar932819473])

</x-layouts.app>