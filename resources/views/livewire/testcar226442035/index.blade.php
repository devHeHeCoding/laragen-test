<div>
    <div wire:loading.delay>
        Loading...
    </div>

    <div class="overflow-hidden">
        <div class="overflow-x-auto">
            <table class="table table-index w-full">
                <thead>
                    <tr>
                                                    <th class="w-28">
                                {{ trans('cruds.application.fields.{{ $crudControllerView->linkedModelIsRelation() ? $crudControllerView->linkedModel->name : $crudControllerView->linkedModel->column_name }}') }}
                            </th>
                                                    <th class="w-28">
                                {{ trans('cruds.application.fields.{{ $crudControllerView->linkedModelIsRelation() ? $crudControllerView->linkedModel->name : $crudControllerView->linkedModel->column_name }}') }}
                            </th>
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
                                    @includeFirst(
                                        [
                                            'admin.crud-controller.testcontroller.index.lexus_beahan_i_i_id',
                                            'admin.generated.crud-controller.testcontroller.index.lexus_beahan_i_i_id'
                                        ]
                                    )
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
