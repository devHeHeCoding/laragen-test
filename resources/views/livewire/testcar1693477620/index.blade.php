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
                                {{ trans('cruds.application.fields.{{ $crudControllerView->linkedModelIsRelation() ? $crudControllerView->linkedModel->name : $crudControllerView->linkedModel->column_name }}') }}
                            </th>
                                                <th class="w-28"> {{ trans('global.actions') }}</th>
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
                                </td>
                                                        <td>
                                <div class="form-group">
                                                                                                                <a href="{{ route('laragentest_cars.show', ['testcar1693477620' => $item->id])}}" class="btn btn-secondary">
                                            {{ trans('global.show') }}
                                        </a>
                                                                                                                <a href="{{ route('laragentest_cars.edit', ['testcar1693477620' => $item->id])}}" class="btn btn-secondary">
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
    </div>
</div>
