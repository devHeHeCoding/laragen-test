<x-layouts.app>


    <x-slot:title>
        <h1>

            {{ trans('global.show') }}
            {{ trans('cruds.test-car17145504.title_singular') }}
        </h1>

    </x-slot:title>

    @livewire('test-car17145504.show', ['testCar17145504' => $testCar17145504])

</x-layouts.app>