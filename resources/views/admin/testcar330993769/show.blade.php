<x-layouts.app>


    <x-slot:title>
        <h1>

            {{ trans('global.show') }}
            {{ trans('cruds.test-car330993769.title_singular') }}
        </h1>

    </x-slot:title>

    @livewire('test-car330993769.show', ['testCar330993769' => $testCar330993769])

</x-layouts.app>