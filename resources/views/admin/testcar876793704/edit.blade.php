<x-layouts.app>

    <x-slot:title>    <h1>
        {{ trans('global.edit') }}
        {{ trans('cruds.test-car876793704.title_singular') }}    </h1>
    </x-slot:title>
    @livewire('test-car876793704.edit', ['testCar876793704' => $testCar876793704])

</x-layouts.app>