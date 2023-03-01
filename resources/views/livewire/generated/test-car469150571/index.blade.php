<div>
    <div wire:loading.delay>
        Loading...
    </div>

    <div class="-my-2 -mx-6 overflow-x-auto lg:-mx-8">
        <div class="inline-block min-w-full py-2 align-middle px-6 lg:px-8">
            <div class="overflow-hidden shadow rounded">
                <table class="laragen-table">
                    <thead>
                    <tr>
                                                    <th>
                                {{ trans('cruds.test-car469150571.fields.test') }}                            </th>
                            @if(\View::exists('admin.crud-controller.testcontroller.index.test_after_header'))
                                @includeIf('admin.crud-controller.testcontroller.index.test_after_header')
                                @endif
                                                <th>{{ trans('global.actions') }}</th>
                    </tr>
                    </thead>
                    <tbody>
                    @forelse($items as $item)
                        <tr>
                                                            <td>
                                    @includeFirst(
                                        [
                                            'admin.crud-controller.testcontroller.index.test',
                                            'admin.generated.crud-controller.testcontroller.index.test'
                                        ]
                                    )
                                    @includeIf('admin.crud-controller.testcontroller.index.test_after')
                                </td>
                                @if(\View::exists('admin.crud-controller.testcontroller.index.test_after_row'))
                                    @includeIf('admin.crud-controller.testcontroller.index.test_after_row')
                                    @endif
                                                        <td>
                                <div class="form-group">
                                    
                                                                            <a href="{{ route('laragen.admin.test_cars.show', ['testCar469150571' => $item->id]) }}" class="btn btn-secondary">
                                            {{ trans('global.show') }}
                                        </a>
                                    
                                                                            <a href="{{ route('laragen.admin.test_cars.edit', ['testCar469150571' => $item->id]) }}" class="btn btn-secondary">
                                            {{ trans('global.edit') }}
                                        </a>
                                    
                                                                            <button class="btn btn-danger mr-2" type="submit" wire:click="delete({{ $item->id }})">
                                            {{ trans('global.delete') }}
                                        </button>
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
                <div class="card-body">
                    <div class="">
                        {{ $items->links() }}
                    </div>
                </div>
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
