<x-layouts.app>
    <x-slot:title>
        <h1>
            {{ trans('cruds.test-car2084720087.title_multiple') }}        </h1>
        <a href="{{ route('laragen.admin.test_cars.create') }}" class="btn btn-secondary">
            {{ trans('global.create') }}
        </a>
    </x-slot:title>

    @livewire('test-car2084720087.index')

</x-layouts.app>