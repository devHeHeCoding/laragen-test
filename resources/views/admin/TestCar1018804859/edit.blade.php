@extends('layouts.admin')
@section('content')
    <div class="row">
        <div class="card bg-blueGray-100">
            <div class="card-header">
                <div class="card-header-container">
                    <h6 class="card-title">
                        {{ trans('global.edit') }}
                        {{ trans('cruds.testcar1018804859.title_singular') }}
                    </h6>
                </div>
            </div>

            <div class="card-body">
                @livewire('application.testcar1018804859.edit', ['testcar1018804859' => $testcar1018804859])
            </div>
        </div>
    </div>
@endsection
