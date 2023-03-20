<x-layouts.app>

    <x-slot:title>    <h1>
        {{ trans('global.edit') }}
        {{ trans('cruds.test-car646393988.title_singular') }}    </h1>
    </x-slot:title>
    @livewire('test-car646393988.edit', ['testCar646393988' => $testCar646393988])

</x-layouts.app>