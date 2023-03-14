<x-layouts.app>


    <x-slot:title>
        <h1>

            {{ trans('global.show') }}
            {{ trans('cruds.test-car821706938.title_singular') }}
        </h1>

    </x-slot:title>

    @livewire('test-car821706938.show', ['testCar821706938' => $testCar821706938])

</x-layouts.app>