<form wire:submit.prevent="submit" class="pt-3" novalidate>
                                        <fieldset>
                                            @includeFirst(
                    [
                        'admin.crud-controller.testcontroller.create.test',
                        'admin.generated.crud-controller.testcontroller.create.test'
                    ]
                )
                    </fieldset>
                    <fieldset>
                                            @includeFirst(
                    [
                        'admin.crud-controller.testcontroller.create.griffin_stiedemann_i_i_id',
                        'admin.generated.crud-controller.testcontroller.create.griffin_stiedemann_i_i_id'
                    ]
                )
                    </fieldset>
    
    <div class="form-group">
        <button class="btn btn-indigo mr-2" type="submit">
            {{ trans('global.save') }}        </button>
                <a href="{{ route('laragen.admin.test_cars.index') }}" class="btn btn-secondary">
            {{ trans('global.cancel') }}
        </a>
    </div>
</form>
