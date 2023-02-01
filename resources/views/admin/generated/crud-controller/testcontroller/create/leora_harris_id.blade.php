<div class="form-group {{$errors->has('testCar1614758844.leora_harris_id') ? 'error' : ''}}">
    <label for="3">
        {{ trans('cruds.test-car1614758844.fields.leora_harris_id') }}        <input type="text"
               id="3"
               name="testCar1614758844.leora_harris_id"
               class="form-control"
               placeholder="leora_harris_id"
               wire:model.defer="testCar1614758844.leora_harris_id"
        >
        <span class="error-message">
            {{$errors->first('testCar1614758844.leora_harris_id')}}        </span>
    </label>
</div>
