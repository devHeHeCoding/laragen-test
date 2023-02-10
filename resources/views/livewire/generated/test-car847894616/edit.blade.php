<x-laragen::form wire:submit.prevent="submit" class="pt-3">                    <fieldset>

            
            <div class="flex-1 -mx-2">
                                                        @includeFirst([
                    'admin.crud-controller.testcontroller.edit.test',
                    'admin.generated.crud-controller.testcontroller.edit.test'
                ])
                    @includeIf('admin.crud-controller.testcontroller.edit.test_after')
                            </div>

        </fieldset>
                                            
    <div class="form-group">
        <button class="btn btn-indigo mr-2" type="submit">
            {{ trans('global.save') }}        </button>
                <a href="{{ route('laragen.admin.test_cars.index') }}" class="btn btn-secondary">
            {{ trans('global.cancel') }}
        </a>
    </div>

</x-laragen::form>