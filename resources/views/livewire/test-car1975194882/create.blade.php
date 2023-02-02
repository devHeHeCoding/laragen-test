<form wire:submit.prevent="submit" class="pt-3" novalidate>
                    <fieldset>
                                @includeFirst([
                'admin.crud-controller.testcontroller.create.test',
                'admin.generated.crud-controller.testcontroller.create.test'
            ])
            @includeIf('admin.crud-controller.testcontroller.create.test_after')
            </fieldset>
        <fieldset>
                                @includeFirst([
                'admin.crud-controller.testcontroller.create.dr._florine_harris_ph_d_id',
                'admin.generated.crud-controller.testcontroller.create.dr._florine_harris_ph_d_id'
            ])
            @includeIf('admin.crud-controller.testcontroller.create.dr._florine_harris_ph_d_id_after')
            </fieldset>

    <div class="form-group">
        <button class="btn btn-indigo mr-2" type="submit">
            {{ trans('global.save') }}        </button>
                <a href="{{ route('laragen.admin.test_cars.index') }}" class="btn btn-secondary">
            {{ trans('global.cancel') }}
        </a>
    </div>
</form>
