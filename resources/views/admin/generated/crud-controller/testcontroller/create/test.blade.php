<div class="form-group {{$errors->has('testCar1426086887.test') ? 'error' : ''}}">
    <label for="7">
        {{ trans('cruds.test-car1426086887.fields.test') }}        <input type="text"
               id="7"
               name="testCar1426086887.test"
               class="form-control"
               placeholder="test"
               wire:model.defer="testCar1426086887.test"
        >
        <span class="error-message">
            {{$errors->first('testCar1426086887.test')}}        </span>
    </label>
</div>
