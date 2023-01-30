<div class="form-group {{$errors->has('testCar660723101.myrtis_graham_i_i_id') ? 'error' : ''}}">
    <label for="1">
        {{ trans('cruds.test-car660723101.fields.myrtis_graham_i_i_id') }}        <input type="text"
               id="1"
               name="testCar660723101.myrtis_graham_i_i_id"
               class="form-control"
               placeholder="myrtis_graham_i_i_id"
               wire:model.defer="testCar660723101.myrtis_graham_i_i_id"
        >
        <span class="error-message">
            {{$errors->first('testCar660723101.myrtis_graham_i_i_id')}}        </span>
    </label>
</div>
