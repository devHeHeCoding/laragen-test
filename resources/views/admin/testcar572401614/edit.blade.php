<x-layouts.app>

    <x-slot:title>    <h1>
        {{ trans('global.edit') }}
        {{ trans('cruds.test-car572401614.title_singular') }}    </h1>
    </x-slot:title>
    @livewire('test-car572401614.edit', ['testCar572401614' => $testCar572401614])

</x-layouts.app>