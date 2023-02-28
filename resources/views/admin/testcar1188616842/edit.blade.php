<x-layouts.app>

    <x-slot:title>    <h1>
        {{ trans('global.edit') }}
        {{ trans('cruds.test-car1188616842.title_singular') }}    </h1>
    </x-slot:title>
    @livewire('test-car1188616842.edit', ['testCar1188616842' => $testCar1188616842])

</x-layouts.app>