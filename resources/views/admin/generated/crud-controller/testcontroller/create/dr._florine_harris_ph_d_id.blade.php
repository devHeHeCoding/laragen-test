<div class="form-group {{$errors->has('testCar1975194882.dr._florine_harris_ph_d_id') ? 'error' : ''}}">
    <label for="3">
        {{ trans('cruds.test-car1975194882.fields.dr._florine_harris_ph_d_id') }}        <input type="text"
               id="3"
               name="testCar1975194882.dr._florine_harris_ph_d_id"
               class="form-control"
               placeholder="dr._florine_harris_ph_d_id"
               wire:model.defer="testCar1975194882.dr._florine_harris_ph_d_id"
        >
        <span class="error-message">
            {{$errors->first('testCar1975194882.dr._florine_harris_ph_d_id')}}        </span>
    </label>
</div>
