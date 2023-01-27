<div>
    <table class="mt-6 w-full">
                    <tr>
                <th class="text-left">
                    {{ trans('cruds.test-car2126254712.fields.test') }}                </th>
                <td>
                    @includeFirst(
                        [
                        'admin.crud-controller.testcontroller.show.test',
                        'admin.generated.crud-controller.testcontroller.show.test'
                        ]
                    )
                </td>
            </tr>
            </table>
</div>
