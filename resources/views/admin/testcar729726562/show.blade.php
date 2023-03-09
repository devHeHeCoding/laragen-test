<x-layouts.app>


    <x-slot:title>
        <h1>

            {{ trans('global.show') }}
            {{ trans('cruds.test-car729726562.title_singular') }}
        </h1>

    </x-slot:title>

    @livewire('test-car729726562.show', ['testCar729726562' => $testCar729726562])

</x-layouts.app>