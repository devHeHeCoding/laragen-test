<div class="form-group {{$errors->has('testCar1095306803.test') ? 'error' : ''}}">
    <label for="7">
        {{ trans('cruds.test-car1095306803.fields.test') }}        <input type="number"
               id="7"
               name="testCar1095306803.test"
               class="form-control"
               placeholder="test"
               wire:model.defer="testCar1095306803.test"
        >
        <span class="error-message">
            {{$errors->first('testCar1095306803.test')}}        </span>
    </label>
</div>
