<x-layouts.app>


    <x-slot:title>
        <h1>

            {{ trans('global.show') }}
            {{ trans('cruds.test-car1969785309.title_singular') }}
        </h1>

    </x-slot:title>

    @livewire('app.namespace.test.show', ['testCar1969785309' => $testCar1969785309])

</x-layouts.app>