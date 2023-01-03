<form wire:submit.prevent="submit" class="pt-3" novalidate>
                                        <fieldset>
                            @includeFirst(
                    [
                        'admin.crud-controller.TestController.create.test',
                        'admin.generated.crud-controller.TestController.create.test'
                    ],
                )
                    </fieldset>
                    <fieldset>
                            @includeFirst(
                    [
                        'admin.crud-controller.TestController.create.prof._anderson_bashirian_m_d_id',
                        'admin.generated.crud-controller.TestController.create.prof._anderson_bashirian_m_d_id'
                    ],
                )
                    </fieldset>
    
    <div class="form-group">
        <button class="btn btn-indigo mr-2" type="submit">
            {{ trans('global.save') }}
        </button>
        <a href="{{ route('admin.testcar1018804859.index') }}" class="btn btn-secondary">
            {{ trans('global.cancel') }}
        </a>
    </div>
</form>
