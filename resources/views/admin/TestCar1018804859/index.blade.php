@extends('layouts.admin')
@section('content')
    <div class="row">
        <div class="card bg-white">
            <div class="card-header border-b border-blueGray-200">
                <div class="card-header-container">
                    <h6 class="card-title">
                        {{ trans('cruds.testcar1018804859.title_multiple') }}
                    </h6>
                </div>
            </div>

            @livewire('application.testcar1018804859.index')

        </div>
    </div>
@endsection
