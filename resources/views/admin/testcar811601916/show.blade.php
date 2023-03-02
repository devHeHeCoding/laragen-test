<x-layouts.app>


    <x-slot:title>
        <h1>

            {{ trans('global.show') }}
            {{ trans('cruds.test-car811601916.title_singular') }}
        </h1>

    </x-slot:title>

    @livewire('test-car811601916.show', ['testCar811601916' => $testCar811601916])

</x-layouts.app>