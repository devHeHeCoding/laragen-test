<x-layouts.app>

    <x-slot:title>    <h1>
        {{ trans('global.edit') }}
        {{ trans('cruds.test-car800783990.title_singular') }}    </h1>
    </x-slot:title>
    @livewire('test-car800783990.edit', ['testCar800783990' => $testCar800783990])

</x-layouts.app>