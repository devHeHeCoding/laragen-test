<x-layouts.app>

<x-slot:title><h1>
    {{ trans('global.edit') }}
    {{ trans('cruds.test-car1448640523.title_singular') }}</h1>
</x-slot:title>
@livewire('test-car1448640523.edit', ['testCar1448640523' => $testCar1448640523])

</x-layouts.app>