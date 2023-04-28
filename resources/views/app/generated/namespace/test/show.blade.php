<x-layouts.app>


    <x-slot:title>
        <h1>

            {{ trans('global.show') }}
            {{ trans('cruds.test-car1844131795.title_singular') }}
        </h1>

    </x-slot:title>

    @livewire('app.namespace.test.show', ['testCar1844131795' => $testCar1844131795])

</x-layouts.app>