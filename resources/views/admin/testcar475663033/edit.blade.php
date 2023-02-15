<x-layouts.app>

    <x-slot:title>    <h1>
        {{ trans('global.edit') }}
        {{ trans('cruds.test-car475663033.title_singular') }}    </h1>
    </x-slot:title>
    @livewire('test-car475663033.edit', ['testCar475663033' => $testCar475663033])

</x-layouts.app>