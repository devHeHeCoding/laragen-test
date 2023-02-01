<div class="form-group {{$errors->has('testCar1513758171.test') ? 'error' : ''}}">
    <label for="7">
        {{ trans('cruds.test-car1513758171.fields.test') }}        <input type="text"
               id="7"
               name="testCar1513758171.test"
               class="form-control"
               placeholder="test"
               wire:model.defer="testCar1513758171.test"
        >
        <span class="error-message">
            {{$errors->first('testCar1513758171.test')}}        </span>
    </label>
</div>
