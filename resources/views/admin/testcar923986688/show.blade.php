<x-layouts.app>


    <x-slot:title>
        <h1>

            {{ trans('global.show') }}
            {{ trans('cruds.test-car923986688.title_singular') }}
        </h1>

    </x-slot:title>

    @livewire('test-car923986688.show', ['testCar923986688' => $testCar923986688])

</x-layouts.app>