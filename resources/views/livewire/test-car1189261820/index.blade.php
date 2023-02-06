<div>
    <div wire:loading.delay>
        Loading...
    </div>

    <div class="overflow-x-auto">
        <div class="overflow-x-auto">
            <table class="table table-index w-full">
                <thead>
                    <tr>
                                                    <th class="w-28">
                                {{ trans('cruds.test-car1189261820.fields.test') }}                            </th>
                            @if(\View::exists('admin.crud-controller.testcontroller.index.test_after_header'))
                                @includeIf('admin.crud-controller.testcontroller.index.test_after_header')
                            @endif
                                                <th class="w-28">{{ trans('global.actions') }}</th>
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
                                    
                                                                            <a href="{{ route('laragen.admin.test_cars.show', ['testCar1189261820' => $item->id]) }}" class="btn btn-secondary">
                                            {{ trans('global.show') }}
                                        </a>
                                    
                                                                            <a href="{{ route('laragen.admin.test_cars.edit', ['testCar1189261820' => $item->id]) }}" class="btn btn-secondary">
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
        </div>
        <div class="card-body">
            <div class="pt-3">
                {{ $items->links() }}
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
