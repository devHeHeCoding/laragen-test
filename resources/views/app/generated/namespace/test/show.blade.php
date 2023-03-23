<x-layouts.app>


    <x-slot:title>
        <h1>

            {{ trans('global.show') }}
            {{ trans('cruds.test-car802765708.title_singular') }}
        </h1>

    </x-slot:title>

    @livewire('namespace.test.show', ['testCar802765708' => $testCar802765708])

</x-layouts.app>