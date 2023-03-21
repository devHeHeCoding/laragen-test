<x-layouts.app>

    <x-slot:title>    <h1>
        {{ trans('global.edit') }}
        {{ trans('cruds.test-car330993769.title_singular') }}    </h1>
    </x-slot:title>
    @livewire('test-car330993769.edit', ['testCar330993769' => $testCar330993769])

</x-layouts.app>