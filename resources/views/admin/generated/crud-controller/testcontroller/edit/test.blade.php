<div class="form-group {{$errors->has('testCar496868380.test') ? 'error' : ''}}">
    <label for="7">
        {{ trans('cruds.test-car496868380.fields.test') }}        <input type="number"
               id="7"
               name="testCar496868380.test"
               class="form-control"
               placeholder="test"
               wire:model.defer="testCar496868380.test"
        >
        <span class="error-message">
            {{$errors->first('testCar496868380.test')}}        </span>
    </label>
</div>
