<div class="table-fieldset">

        
        <table class="w-full show-table">
                                            <tr>
                    <th class="text-left">
                        {{ trans('cruds.test-car533183347.fields.test') }}                    </th>
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
                        