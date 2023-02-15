<x-layouts.app>

    <x-slot:title>    <h1>
        {{ trans('global.edit') }}
        {{ trans('cruds.test-car11382236.title_singular') }}    </h1>
    </x-slot:title>
    @livewire('test-car11382236.edit', ['testCar11382236' => $testCar11382236])

</x-layouts.app>