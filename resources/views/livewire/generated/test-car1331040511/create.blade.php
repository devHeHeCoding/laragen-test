<x-laragen::form wire:submit.prevent="submit" class="pt-3">
                    <fieldset>

        
        <div class="flex-1 -mx-2">
                                            @includeFirst([
                            'admin.crud-controller.testcontroller.create.test',
                            'admin.generated.crud-controller.testcontroller.create.test'
                        ])
                @includeIf('admin.crud-controller.testcontroller.create.test_after')
                    </div>
    </fieldset>
        <fieldset>

        
        <div class="flex-1 -mx-2">
                                            @includeFirst([
                            'admin.crud-controller.testcontroller.create.hannah_welch_id',
                            'admin.generated.crud-controller.testcontroller.create.hannah_welch_id'
                        ])
                @includeIf('admin.crud-controller.testcontroller.create.hannah_welch_id_after')
                    </div>
    </fieldset>

<div class="form-group">

    <x-laragen::button class="mr-2">    {{ trans('global.save') }}    </x-laragen::button>
        <a href="{{ route('laragen.admin.test_cars.index') }}" class="btn btn-secondary">
        {{ trans('global.cancel') }}
    </a>
</div>

</x-laragen::form>