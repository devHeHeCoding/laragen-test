<x-layouts.app>

    <x-slot:title>    <h1>
        {{ trans('global.edit') }}
        {{ trans('cruds.test-car923986688.title_singular') }}    </h1>
    </x-slot:title>
    @livewire('test-car923986688.edit', ['testCar923986688' => $testCar923986688])

</x-layouts.app>