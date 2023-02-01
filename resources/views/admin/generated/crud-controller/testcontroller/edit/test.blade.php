<div class="form-group {{$errors->has('testCar1677932393.test') ? 'error' : ''}}">
    <label for="7">
        {{ trans('cruds.test-car1677932393.fields.test') }}        <input type="number"
               id="7"
               name="testCar1677932393.test"
               class="form-control"
               placeholder="test"
               wire:model.defer="testCar1677932393.test"
        >
        <span class="error-message">
            {{$errors->first('testCar1677932393.test')}}        </span>
    </label>
</div>
