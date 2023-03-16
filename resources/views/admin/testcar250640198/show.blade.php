<x-layouts.app>


    <x-slot:title>
        <h1>

            {{ trans('global.show') }}
            {{ trans('cruds.test-car250640198.title_singular') }}
        </h1>

    </x-slot:title>

    @livewire('test-car250640198.show', ['testCar250640198' => $testCar250640198])

</x-layouts.app>