<x-laragen::form wire:submit.prevent="submit" class="pt-3">
                    <fieldset>

        
        <div class="flex-1 -mx-2">
                                            @includeFirst([
                            'app.namespace.test.fields.create.test',
                            'app.generated.namespace.test.fields.create.test'
                        ])
                @includeIf('app.namespace.test.fields.create.test_after')
                    </div>
    </fieldset>
        <fieldset>

        
        <div class="flex-1 -mx-2">
                                            @includeFirst([
                            'app.namespace.test.fields.create.nayeli_kassulke_id',
                            'app.generated.namespace.test.fields.create.nayeli_kassulke_id'
                        ])
                @includeIf('app.namespace.test.fields.create.nayeli_kassulke_id_after')
                    </div>
    </fieldset>

<div class="form-group">

    <x-laragen::button class="mr-2">    {{ trans('global.save') }}    </x-laragen::button>
        <a href="{{ route('laragen.admin.route.prefix.index') }}" class="btn btn-secondary">
        {{ trans('global.cancel') }}
    </a>
</div>

</x-laragen::form>