<x-layouts.app>


    <x-slot:title>
        <h1>

            {{ trans('global.show') }}
            {{ trans('cruds.test-car443014738.title_singular') }}
        </h1>

    </x-slot:title>

    @livewire('test-car443014738.show', ['testCar443014738' => $testCar443014738])

</x-layouts.app>