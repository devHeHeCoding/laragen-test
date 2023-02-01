<div class="form-group {{$errors->has('testCar1677932393.bettie_cassin_id') ? 'error' : ''}}">
    <label for="3">
        {{ trans('cruds.test-car1677932393.fields.bettie_cassin_id') }}        <input type="text"
               id="3"
               name="testCar1677932393.bettie_cassin_id"
               class="form-control"
               placeholder="bettie_cassin_id"
               wire:model.defer="testCar1677932393.bettie_cassin_id"
        >
        <span class="error-message">
            {{$errors->first('testCar1677932393.bettie_cassin_id')}}        </span>
    </label>
</div>
