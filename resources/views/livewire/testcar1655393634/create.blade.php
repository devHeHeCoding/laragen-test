<form wire:submit.prevent="submit" class="pt-3" novalidate>
                                        <fieldset>
                            @includeFirst(
                    [
                        'admin.crud-controller.TestController.create.test',
                        'admin.generated.crud-controller.TestController.create.test'
                    ]
                )
                    </fieldset>
                    <fieldset>
                            @includeFirst(
                    [
                        'admin.crud-controller.TestController.create.gertrude_beahan_id',
                        'admin.generated.crud-controller.TestController.create.gertrude_beahan_id'
                    ]
                )
                    </fieldset>
    
    <div class="form-group">
        <button class="btn btn-indigo mr-2" type="submit">
            {{ trans('global.save') }}
        </button>
        <a href="{{ route('admin.testcar1655393634.index') }}" class="btn btn-secondary">
            {{ trans('global.cancel') }}
        </a>
    </div>
</form>
