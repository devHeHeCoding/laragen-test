<x-layouts.app>


    <x-slot:title>
        <h1>

            {{ trans('global.show') }}
            {{ trans('cruds.test-car475663033.title_singular') }}
        </h1>

    </x-slot:title>

    @livewire('test-car475663033.show', ['testCar475663033' => $testCar475663033])

</x-layouts.app>