<div>
    <div wire:loading.delay>
        Loading...
    </div>
    @includeIf('app.namespace.test.index.before_content')
    <div class="-my-2 -mx-6 overflow-x-auto lg:-mx-7">
        <div class="inline-block min-w-full py-2 align-middle px-6 lg:px-8">
            <div class="overflow-hidden shadow rounded">
                <table class="laragen-table">
                    <thead>
                    <tr>
                                                    @includeIf('app.namespace.test.index.test_before_header')
                            <th>
                                {{ trans('cruds.test-car376290551.fields.test') }}                            </th>
                            @includeIf('app.namespace.test.index.test_after_header')
                                                <th style="width: 120px">{{ trans('global.actions') }}</th>
                    </tr>
                    </thead>
                    <tbody>
                    @forelse($items as $item)
                        <tr>
                                                            @includeIf('app.namespace.test.fields.index.test_before_column')
                                <td>
                                    @includeFirst(
                                        [
                                            'app.namespace.test.fields.index.test',
                                            'app.generated.namespace.test.fields.index.test'
                                        ]
                                    )
                                    @includeIf('app.namespace.test.fields.index.test_after')
                                </td>
                                @includeIf('app.namespace.test.fields.index.test_after_column')
                                                        <td>
                                <div class="form-group">
                                    
                                    @if(!$hideDefaultActions)

                                    
                                        
                                        <x-laragen::button variant="text" size="xs" icon="fa-light fa-eye" href="{{ route('laragen.admin.route.prefix.show', ['testCar376290551' => $item->id]) }}"></x-laragen::button>
                                    
                                    
                                        
                                        <x-laragen::button variant="text" size="xs" icon="fa-light fa-pencil" href="{{ route('laragen.admin.route.prefix.edit', ['testCar376290551' => $item->id]) }}"></x-laragen::button>                                    
                                                                            <x-laragen::button variant="text" size="xs" icon="fa-light fa-trash" color="error" wire:click="delete({{ $item->id }})"></x-laragen::button>                                    
                                    @endif
                                    @includeIf('app.namespace.test.index.actions')
                                </div>
                            </td>
                        </tr>
                        @empty
                        <tr>
                            <td colspan="10">No entries found.</td>
                        </tr>
                        @endforelse
                    </tbody>
                </table>
            </div>
            <div class="mt-5 pagination">
                {{ $items->onEachSide(1)->links() }}
            </div>
        </div>
    </div>

    @includeIf('app.namespace.test.index.after_content')
</div>

    @push('scripts')
        <script>
            Livewire.on('deleteNotAllowed', e => {
                alert('Delete not allowed, check related rows.');
            })
        </script>
    @endpush

@includeIf('app.namespace.test.index.footer')
