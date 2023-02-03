<x-laragen::form wire:submit.prevent="submit" class="pt-3">
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
                        'admin.crud-controller.testcontroller.create.wilhelm_wisoky_id',
                        'admin.generated.crud-controller.testcontroller.create.wilhelm_wisoky_id'
                    ]
                )
                    </fieldset>
    
    <div class="form-group">

        <x-laragen::button class="mr-2">            {{ trans('global.save') }}        </x-laragen::button>
                <a href="{{ route('laragen.admin.test_cars.index') }}" class="btn btn-secondary">
            {{ trans('global.cancel') }}
        </a>
    </div>

</x-laragen::form>