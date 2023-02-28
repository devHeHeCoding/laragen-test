<x-layouts.app>


    <x-slot:title>
        <h1>

            {{ trans('global.show') }}
            {{ trans('cruds.test-car1188616842.title_singular') }}
        </h1>

    </x-slot:title>

    @livewire('test-car1188616842.show', ['testCar1188616842' => $testCar1188616842])

</x-layouts.app>