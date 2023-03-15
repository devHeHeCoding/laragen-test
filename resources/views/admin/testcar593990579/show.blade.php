<x-layouts.app>


    <x-slot:title>
        <h1>

            {{ trans('global.show') }}
            {{ trans('cruds.test-car593990579.title_singular') }}
        </h1>

    </x-slot:title>

    @livewire('test-car593990579.show', ['testCar593990579' => $testCar593990579])

</x-layouts.app>