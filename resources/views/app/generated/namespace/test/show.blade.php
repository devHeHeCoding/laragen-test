<x-layouts.app>


    <x-slot:title>
        <h1>

            {{ trans('global.show') }}
            {{ trans('cruds.test-car924683350.title_singular') }}
        </h1>

    </x-slot:title>

    @livewire('namespace.test.show', ['testCar924683350' => $testCar924683350])

</x-layouts.app>