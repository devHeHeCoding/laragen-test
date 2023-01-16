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
                        'admin.crud-controller.testcontroller.create.abbey_steuber_id',
                        'admin.generated.crud-controller.testcontroller.create.abbey_steuber_id'
                    ]
                )
                    </fieldset>
    
    <div class="form-group">
        <button class="btn btn-indigo mr-2" type="submit">
            {{ trans('global.save') }}
        </button>
        <a href="{{ route('laragen{{ strtolower($crudController->model->table_name) }}.index') }}" class="btn btn-secondary">
            {{ trans('global.cancel') }}
        </a>
    </div>
</form>
