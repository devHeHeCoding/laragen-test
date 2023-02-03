<x-layouts.app>


    <x-slot:title>
        <h1>

            {{ trans('global.show') }}
            {{ trans('cruds.test-car276494793.title_singular') }}
        </h1>

    </x-slot:title>

    @livewire('test-car276494793.show', ['testCar276494793' => $testCar276494793])

</x-layouts.app>