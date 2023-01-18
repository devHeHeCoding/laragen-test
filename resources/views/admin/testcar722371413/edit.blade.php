<x-layouts.app>
<div class="row">
    <div class="card bg-blueGray-100">
        <div class="card-header">
            <div class="card-header-container">
                <h6 class="card-title">
                    {{ trans('global.edit') }}
                    {{ trans('cruds.testcar722371413.title_singular') }}
                </h6>
            </div>
        </div>

        <div class="card-body">
            @livewire('testcar722371413.edit', ['testcar722371413' => $testcar722371413])
        </div>
    </div>
</div>
</x-layouts.app>