<x-layouts.app>


    <x-slot:title>
        <h1>

            {{ trans('global.show') }}
            {{ trans('cruds.test-car800783990.title_singular') }}
        </h1>

    </x-slot:title>

    @livewire('test-car800783990.show', ['testCar800783990' => $testCar800783990])

</x-layouts.app>