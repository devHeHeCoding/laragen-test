<x-layouts.app>


    <x-slot:title>
        <h1>

            {{ trans('global.show') }}
            {{ trans('cruds.test-car898972813.title_singular') }}
        </h1>

    </x-slot:title>

    @livewire('test-car898972813.show', ['testCar898972813' => $testCar898972813])

</x-layouts.app>