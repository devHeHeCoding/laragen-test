<div class="form-group {{$errors->has('testCar1629897200.test') ? 'error' : ''}}">
    <label for="7">
        {{ trans('cruds.test-car1629897200.fields.test') }}        <input type="text"
               id="7"
               name="testCar1629897200.test"
               class="form-control"
               placeholder="test"
               wire:model.defer="testCar1629897200.test"
        >
        <span class="error-message">
            {{$errors->first('testCar1629897200.test')}}        </span>
    </label>
</div>
