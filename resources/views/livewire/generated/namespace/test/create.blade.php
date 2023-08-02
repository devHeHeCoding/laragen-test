<x-laragen::form wire:submit.prevent="submit" class="pb-7 bg-white shadow rounded px-7">
                                        @includeIf('app.namespace.test.create.fieldset.mrs.before')
        <fieldset>

            
            <div class="flex-1 -mx-2">
                @includeIf('app.namespace.test.create.fieldset.mrs.content_before')
                                                        @includeIf('app.namespace.test.fields.create.test_before')
                    @includeFirst([
                                'app.namespace.test.fields.create.test',
                                'app.generated.namespace.test.fields.create.test'
                            ])
                    @includeIf('app.namespace.test.fields.create.test_after')
                                @includeIf('app.namespace.test.create.fieldset.mrs.content_after')
            </div>

        </fieldset>
        @includeIf('app.namespace.test.create.fieldset.mrs.after')
                    @includeIf('app.namespace.test.create.fieldset.mrs-2.before')
        <fieldset>

            
            <div class="flex-1 -mx-2">
                @includeIf('app.namespace.test.create.fieldset.mrs-2.content_before')
                                                        @includeIf('app.namespace.test.fields.create.has_many_relation_prof._liliane_smitham_id_before')
                    @includeFirst([
                                'app.namespace.test.fields.create.has_many_relation_prof._liliane_smitham_id',
                                'app.generated.namespace.test.fields.create.has_many_relation_prof._liliane_smitham_id'
                            ])
                    @includeIf('app.namespace.test.fields.create.has_many_relation_prof._liliane_smitham_id_after')
                                @includeIf('app.namespace.test.create.fieldset.mrs-2.content_after')
            </div>

        </fieldset>
        @includeIf('app.namespace.test.create.fieldset.mrs-2.after')
    
    <div class="form-group">

        <x-laragen::button class="mr-2">        {{ trans('global.save') }}        </x-laragen::button>
                <a href="{{ route('laragen.admin.route.prefix.index') }}" class="btn btn-secondary">
            {{ trans('global.cancel') }}
        </a>
    </div>

</x-laragen::form>
@includeIf('app.namespace.test.create.footer')
