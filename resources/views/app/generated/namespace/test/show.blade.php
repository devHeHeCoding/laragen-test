<x-layouts.app>


    <x-slot:title>
        <h1>

            {{ trans('global.show') }}
            {{ trans('cruds.test-car584964822.title_singular') }}
        </h1>

    </x-slot:title>

    @livewire('app.namespace.test.show', ['testCar584964822' => $testCar584964822])

</x-layouts.app>