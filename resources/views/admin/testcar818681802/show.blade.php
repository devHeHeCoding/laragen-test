<x-layouts.app>


    <x-slot:title>
        <h1>

            {{ trans('global.show') }}
            {{ trans('cruds.test-car818681802.title_singular') }}
        </h1>

    </x-slot:title>

    @livewire('test-car818681802.show', ['testCar818681802' => $testCar818681802])

</x-layouts.app>