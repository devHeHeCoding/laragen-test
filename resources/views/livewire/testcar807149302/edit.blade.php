<form wire:submit.prevent="submit" class="pt-3" novalidate>
                    <fieldset>
                            @includeFirst(
                    [
                        'admin.crud-controller.testcontroller.edit.test',
                        'admin.generated.crud-controller.testcontroller.edit.test'
                    ],
                )
                            @includeFirst(
                    [
                        'admin.crud-controller.testcontroller.edit.harrison_mayer_d_v_m_id',
                        'admin.generated.crud-controller.testcontroller.edit.harrison_mayer_d_v_m_id'
                    ],
                )
                    </fieldset>
                                            
    <div class="form-group">
        <button class="btn btn-indigo mr-2" type="submit">
            {{ trans('global.save') }}
        </button>
        <a href="{{ route('admin.testcar807149302.index') }}" class="btn btn-secondary">
            {{ trans('global.cancel') }}
        </a>
    </div>
</form>
