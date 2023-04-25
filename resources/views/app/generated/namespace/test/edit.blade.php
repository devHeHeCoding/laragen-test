<x-layouts.app>

    <x-slot:title>    <h1>
        {{ trans('global.edit') }}
        {{ trans('cruds.test-car584964822.title_singular') }}    </h1>
    </x-slot:title>
    @livewire('app.namespace.test.edit', ['testCar584964822' => $testCar584964822])

</x-layouts.app>