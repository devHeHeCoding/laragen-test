<div class="form-group {{$errors->has('testCar1677949319.calista_gerhold_id') ? 'error' : ''}}">
    <label for="3">
        {{ trans('cruds.test-car1677949319.fields.calista_gerhold_id') }}        <input type="text"
               id="3"
               name="testCar1677949319.calista_gerhold_id"
               class="form-control"
               placeholder="calista_gerhold_id"
               wire:model.defer="testCar1677949319.calista_gerhold_id"
        >
        <span class="error-message">
            {{$errors->first('testCar1677949319.calista_gerhold_id')}}        </span>
    </label>
</div>
