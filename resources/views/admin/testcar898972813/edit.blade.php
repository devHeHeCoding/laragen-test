<x-layouts.app>

    <x-slot:title>    <h1>
        {{ trans('global.edit') }}
        {{ trans('cruds.test-car898972813.title_singular') }}    </h1>
    </x-slot:title>
    @livewire('test-car898972813.edit', ['testCar898972813' => $testCar898972813])

</x-layouts.app>