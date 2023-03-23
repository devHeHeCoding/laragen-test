<div>
    <div wire:loading.delay>
        Loading...
    </div>

    <div class="-my-2 -mx-6 overflow-x-auto lg:-mx-7">
        <div class="inline-block min-w-full py-2 align-middle px-6 lg:px-8">
            <div class="overflow-hidden shadow rounded">
                <table class="laragen-table">
                    <thead>
                    <tr>
                                                    <th>
                                {{ trans('cruds.test-car1436258828.fields.test') }}                            </th>
                            @if(\View::exists('admin.crud-controller.testcontroller.index.test_after_header'))
                                @includeIf('admin.crud-controller.testcontroller.index.test_after_header')
                                @endif
                                                <th style="width: 120px">{{ trans('global.actions') }}</th>
                    </tr>
                    </thead>
                    <tbody>
                    @forelse($items as $item)
                        <tr>
                                                            <td>
                                    @includeFirst(
                                        [
                                            'app.namespace.test.fields.index.test',
                                            'app.generated.namespace.test.fields.index.test'
                                        ]
                                    )
                                    @includeIf('app.namespace.test.fields.index.test_after')
                                </td>
                                @if(\View::exists('app.namespace.test.fields.index.test_after_row'))
                                    @includeIf('app.namespace.test.fields.index.test_after_row')
                                @endif
                                                        <td>
                                <div class="form-group">
                                    
                                    
                                        
                                        <x-laragen::button variant="text" size="xs" icon="fa-light fa-eye" href="{{ route('laragen.admin.route.prefix.show', ['testCar1436258828' => $item->id]) }}"></x-laragen::button>
                                    
                                    
                                        
                                        <x-laragen::button variant="text" size="xs" icon="fa-light fa-pencil" href="{{ route('laragen.admin.route.prefix.edit', ['testCar1436258828' => $item->id]) }}"></x-laragen::button>                                    
                                                                            <x-laragen::button variant="text" size="xs" icon="fa-light fa-trash" color="error" wire:click="delete({{ $item->id }})"></x-laragen::button>                                                                    </div>
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
</div>

    @push('scripts')
        <script>
            Livewire.on('deleteNotAllowed', e => {
                alert('Delete not allowed, check related rows.');
            })
        </script>
    @endpush
