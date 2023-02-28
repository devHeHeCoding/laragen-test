<x-layouts.app>


    <x-slot:title>
        <h1>

            {{ trans('global.show') }}
            {{ trans('cruds.test-car907212109.title_singular') }}
        </h1>

    </x-slot:title>

    @livewire('test-car907212109.show', ['testCar907212109' => $testCar907212109])

</x-layouts.app>