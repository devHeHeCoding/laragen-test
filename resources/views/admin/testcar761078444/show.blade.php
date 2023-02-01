<x-layouts.app>


    <x-slot:title>
        <h1>

            {{ trans('global.show') }}
            {{ trans('cruds.test-car761078444.title_singular') }}
        </h1>

    </x-slot:title>

    @livewire('test-car761078444.show', ['testCar761078444' => $testCar761078444])

</x-layouts.app>