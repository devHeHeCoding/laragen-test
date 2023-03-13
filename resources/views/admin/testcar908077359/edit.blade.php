<x-layouts.app>

    <x-slot:title>    <h1>
        {{ trans('global.edit') }}
        {{ trans('cruds.test-car908077359.title_singular') }}    </h1>
    </x-slot:title>
    @livewire('test-car908077359.edit', ['testCar908077359' => $testCar908077359])

</x-layouts.app>