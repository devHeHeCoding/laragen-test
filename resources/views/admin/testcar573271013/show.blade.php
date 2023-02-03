<x-layouts.app>


    <x-slot:title>
        <h1>

            {{ trans('global.show') }}
            {{ trans('cruds.test-car573271013.title_singular') }}
        </h1>

    </x-slot:title>

    @livewire('test-car573271013.show', ['testCar573271013' => $testCar573271013])

</x-layouts.app>