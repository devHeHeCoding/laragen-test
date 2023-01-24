<x-layouts.app>

<x-slot:title><h1>
    {{ trans('global.edit') }}
    {{ trans('cruds.test-car1142857027.title_singular') }}</h1>
</x-slot:title>
@livewire('test-car1142857027.edit', ['testCar1142857027' => $testCar1142857027])

</x-layouts.app>