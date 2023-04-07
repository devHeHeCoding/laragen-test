<x-layouts.app>

    <x-slot:title>    <h1>
        {{ trans('global.edit') }}
        {{ trans('cruds.test-car521786102.title_singular') }}    </h1>
    </x-slot:title>
    @livewire('app.namespace.test.edit', ['testCar521786102' => $testCar521786102])

</x-layouts.app>