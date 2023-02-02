<div class="form-group {{$errors->has('testCar1975194882.test') ? 'error' : ''}}">
    <label for="7">
        {{ trans('cruds.test-car1975194882.fields.test') }}        <input type="text"
               id="7"
               name="testCar1975194882.test"
               class="form-control"
               placeholder="test"
               wire:model.defer="testCar1975194882.test"
        >
        <span class="error-message">
            {{$errors->first('testCar1975194882.test')}}        </span>
    </label>
</div>
