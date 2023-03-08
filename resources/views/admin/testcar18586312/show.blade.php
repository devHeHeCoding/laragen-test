<x-layouts.app>


    <x-slot:title>
        <h1>

            {{ trans('global.show') }}
            {{ trans('cruds.test-car18586312.title_singular') }}
        </h1>

    </x-slot:title>

    @livewire('test-car18586312.show', ['testCar18586312' => $testCar18586312])

</x-layouts.app>