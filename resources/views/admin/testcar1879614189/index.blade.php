<x-layouts.app>
    <x-slot:title>        <h1>
            {{ trans('cruds.test-car1879614189.title_multiple') }}        </h1>
    </x-slot:title>

    <x-slot:headerActions>                <x-laragen::button href="<?php echo e(@route(laragen.admin.test_cars.create)); ?>" >            {{ trans('global.create') }}
        </x-laragen::button>    </x-slot:headerActions>
    @livewire('test-car1879614189.index')

</x-layouts.app>