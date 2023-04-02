<div class="table-fieldset">

        
        <table class="w-full show-table">
                                            <tr>
                    <th class="text-left">
                        {{ trans('cruds.test-car2143608614.fields.test') }}                    </th>
                    <td>

                        @includeFirst(
                            [
                            'app.namespace.test.fields.show.test',
                            'app.generated.namespace.test.fields.show.test'
                            ]
                        )
                    </td>
                </tr>
                @includeIf('app.namespace.test.fields.show.test_after')
                    </table>
    </div>
                        
@includeIf('app.namespace.test.show.footer')
