<x-laragen::form wire:submit.prevent="submit" class="pt-3">
                                        <fieldset>
                                            @includeFirst([
                    'admin.crud-controller.testcontroller.create.test',
                    'admin.generated.crud-controller.testcontroller.create.test'
                ])
                @includeIf('admin.crud-controller.testcontroller.create.test_after')
                    </fieldset>
                    <fieldset>
                                            @includeFirst([
                    'admin.crud-controller.testcontroller.create.dr._hassan_fay_id',
                    'admin.generated.crud-controller.testcontroller.create.dr._hassan_fay_id'
                ])
                @includeIf('admin.crud-controller.testcontroller.create.dr._hassan_fay_id_after')
                    </fieldset>
    
    <div class="form-group">

        <x-laragen::button class="mr-2">            {{ trans('global.save') }}        </x-laragen::button>
                <a href="{{ route('laragen.admin.test_cars.index') }}" class="btn btn-secondary">
            {{ trans('global.cancel') }}
        </a>
    </div>

</x-laragen::form>