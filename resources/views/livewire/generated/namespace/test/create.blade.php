<x-laragen::form wire:submit.prevent="submit" class="pt-3">
                                        @includeIf('app.namespace.test.create.fieldset.6.before')
        <fieldset>

            
            <div class="flex-1 -mx-2">
                @includeIf('app.namespace.test.create.fieldset.6.content_before')
                                    @includeIf('app.namespace.test.fields.create.test_before')
                    @includeFirst([
                                'app.namespace.test.fields.create.test',
                                'app.generated.namespace.test.fields.create.test'
                            ])
                    @includeIf('app.namespace.test.fields.create.test_after')
                                @includeIf('app.namespace.test.create.fieldset.6.content_after')
            </div>

        </fieldset>
        @includeIf('app.namespace.test.create.fieldset.6.after')
                    @includeIf('app.namespace.test.create.fieldset.7.before')
        <fieldset>

            
            <div class="flex-1 -mx-2">
                @includeIf('app.namespace.test.create.fieldset.7.content_before')
                                    @includeIf('app.namespace.test.fields.create.juana_stark_d_d_s_id_before')
                    @includeFirst([
                                'app.namespace.test.fields.create.juana_stark_d_d_s_id',
                                'app.generated.namespace.test.fields.create.juana_stark_d_d_s_id'
                            ])
                    @includeIf('app.namespace.test.fields.create.juana_stark_d_d_s_id_after')
                                @includeIf('app.namespace.test.create.fieldset.7.content_after')
            </div>

        </fieldset>
        @includeIf('app.namespace.test.create.fieldset.7.after')
    
    <div class="form-group">

        <x-laragen::button class="mr-2">        {{ trans('global.save') }}        </x-laragen::button>
                <a href="{{ route('laragen.admin.route.prefix.index') }}" class="btn btn-secondary">
            {{ trans('global.cancel') }}
        </a>
    </div>

</x-laragen::form>
@includeIf('app.namespace.test.create.footer')
