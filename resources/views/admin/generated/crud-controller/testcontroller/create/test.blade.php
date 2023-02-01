<div class="form-group {{$errors->has('testCar1925979731.test') ? 'error' : ''}}">
    <label for="7">
        {{ trans('cruds.test-car1925979731.fields.test') }}        <input type="text"
               id="7"
               name="testCar1925979731.test"
               class="form-control"
               placeholder="test"
               wire:model.defer="testCar1925979731.test"
        >
        <span class="error-message">
            {{$errors->first('testCar1925979731.test')}}        </span>
    </label>
</div>
