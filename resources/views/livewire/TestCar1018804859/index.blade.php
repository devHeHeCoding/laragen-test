<div>
    <div class="card-controls sm:flex">
        <div class="w-full sm:w-1/2">
            Per page:
            <select wire:model="perPage" class="form-select w-full sm:w-1/6">
                @foreach($paginationOptions as $value)
                    <option value="{{ $value }}">{{ $value }}</option>
                @endforeach
            </select>

        </div>
        <div class="w-full sm:w-1/2 sm:text-right">
            Search:
            <input type="text" wire:model.debounce.300ms="search" class="w-full sm:w-1/3 inline-block"/>
        </div>
    </div>

    <div wire:loading.delay>
        Loading...
    </div>

    <div class="overflow-hidden">
        <div class="overflow-x-auto">
            <table class="table table-index w-full">
                <thead>
                    <tr>
                                                    <th class="w-28">
                                {{ trans('cruds.application.fields.test') }}
                            </th>
                                                    <th class="w-28">
                                {{ trans('cruds.application.fields.has_many_relation') }}
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
                                        ],
                                    )
                                </td>
                                                            <td>
                                    @includeFirst(
                                        [
                                            'admin.crud-controller.testcontroller.index.prof._anderson_bashirian_m_d_id',
                                            'admin.generated.crud-controller.testcontroller.index.prof._anderson_bashirian_m_d_id'
                                        ],
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

    <div class="card-body">
        <div class="pt-3">
            @if($this->selectedCount)
                <p class="text-sm leading-5">
                    <span class="font-medium">
                        {{ $this->selectedCount }}
                    </span>
                    {{ __('Entries selected') }}
                </p>
            @endif
            {{ $items->links() }}
        </div>
    </div>
</div>
