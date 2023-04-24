<x-layouts.app>


    <x-slot:title>
        <h1>

            {{ trans('global.show') }}
            {{ trans('cruds.test-car1627959592.title_singular') }}
        </h1>

    </x-slot:title>

    @livewire('app.namespace.test.show', ['testCar1627959592' => $testCar1627959592])

</x-layouts.app>