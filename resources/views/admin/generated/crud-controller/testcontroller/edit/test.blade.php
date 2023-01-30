<div class="form-group {{$errors->has('testCar1471706017.test') ? 'error' : ''}}">
    <label for="7">
        {{ trans('cruds.test-car1471706017.fields.test') }}        <input type="number"
               id="7"
               name="testCar1471706017.test"
               class="form-control"
               placeholder="test"
               wire:model.defer="testCar1471706017.test"
        >
        <span class="error-message">
            {{$errors->first('testCar1471706017.test')}}        </span>
    </label>
</div>
