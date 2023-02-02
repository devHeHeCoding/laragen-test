<div class="form-group {{$errors->has('testCar1629897200.karine_schumm_id') ? 'error' : ''}}">
    <label for="3">
        {{ trans('cruds.test-car1629897200.fields.karine_schumm_id') }}        <input type="text"
               id="3"
               name="testCar1629897200.karine_schumm_id"
               class="form-control"
               placeholder="karine_schumm_id"
               wire:model.defer="testCar1629897200.karine_schumm_id"
        >
        <span class="error-message">
            {{$errors->first('testCar1629897200.karine_schumm_id')}}        </span>
    </label>
</div>
