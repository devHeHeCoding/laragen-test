<x-layouts.app>
    <x-slot:title>
        <h1>
            {{ trans('cruds.test-car342094486.title_multiple') }}        </h1>
        <a href="{{ route('laragen.admin.test_cars.create') }}" class="btn btn-secondary">
            {{ trans('global.create') }}
        </a>
    </x-slot:title>

    @livewire('test-car342094486.index')

</x-layouts.app>