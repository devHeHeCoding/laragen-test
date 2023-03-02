<x-layouts.app>


    <x-slot:title>
        <h1>

            {{ trans('global.show') }}
            {{ trans('cruds.test-car377863369.title_singular') }}
        </h1>

    </x-slot:title>

    @livewire('test-car377863369.show', ['testCar377863369' => $testCar377863369])

</x-layouts.app>