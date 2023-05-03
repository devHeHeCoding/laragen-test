<x-laragen::form wire:submit.prevent="submit" class="pb-7 bg-white shadow rounded px-7">                    @includeIf('app.namespace.test.edit.fieldset.5.before')
        <fieldset>

            
            <div class="flex-1 -mx-2">
                @includeIf('app.namespace.test.edit.fieldset.5.content_before')
                                    @includeIf('app.namespace.test.fields.edit.test_before')
                    @includeFirst([
                        'app.namespace.test.fields.edit.test',
                        'app.generated.namespace.test.fields.edit.test'
                    ])
                    @includeIf('app.namespace.test.fields.edit.test_after')
                                @includeIf('app.namespace.test.edit.fieldset.5.content_after')
            </div>

        </fieldset>
        @includeIf('app.namespace.test.edit.fieldset.5.after')
                                            
    <div class="form-group">

        <x-laragen::button class="mr-2">        {{ trans('global.save') }}        </x-laragen::button>
                <a href="{{ route('laragen.admin.route.prefix.index') }}" class="btn btn-secondary">
            {{ trans('global.cancel') }}
        </a>
    </div>

</x-laragen::form>
@includeIf('app.namespace.test.edit.footer')
