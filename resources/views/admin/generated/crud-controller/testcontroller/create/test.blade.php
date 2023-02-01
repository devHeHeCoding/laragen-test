<div class="form-group {{$errors->has('testCar1556346522.test') ? 'error' : ''}}">
    <label for="7">
        {{ trans('cruds.test-car1556346522.fields.test') }}        <input type="text"
               id="7"
               name="testCar1556346522.test"
               class="form-control"
               placeholder="test"
               wire:model.defer="testCar1556346522.test"
        >
        <span class="error-message">
            {{$errors->first('testCar1556346522.test')}}        </span>
    </label>
</div>
