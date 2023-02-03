<x-layouts.app>

    <x-slot:title>    <h1>
        {{ trans('global.edit') }}
        {{ trans('cruds.test-car776051337.title_singular') }}    </h1>
    </x-slot:title>
    @livewire('test-car776051337.edit', ['testCar776051337' => $testCar776051337])

</x-layouts.app>