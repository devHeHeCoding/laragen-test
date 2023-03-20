<div class="table-fieldset">

        
        <table class="w-full show-table">
                                            <tr>
                    <th class="text-left">
                        {{ trans('cruds.test-car1186187951.fields.test') }}                    </th>
                    <td>

                        @includeFirst(
                            [
                            'admin.crud-controller.testcontroller.show.test',
                            'admin.generated.crud-controller.testcontroller.show.test'
                            ]
                        )
                    </td>
                </tr>
                @includeIf('admin.crud-controller.testcontroller.show.test_after')
                    </table>
    </div>
                        