<div class="form-group {{$errors->has('testCar972647089.test') ? 'error' : ''}}">
    <label for="7">
        {{ trans('cruds.test-car972647089.fields.test') }}        <input type="number"
               id="7"
               name="testCar972647089.test"
               class="form-control"
               placeholder="test"
               wire:model.defer="testCar972647089.test"
        >
        <span class="error-message">
            {{$errors->first('testCar972647089.test')}}        </span>
    </label>
</div>
