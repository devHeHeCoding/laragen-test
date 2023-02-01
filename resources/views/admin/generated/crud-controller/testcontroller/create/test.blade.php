<div class="form-group {{$errors->has('testCar1857120497.test') ? 'error' : ''}}">
    <label for="7">
        {{ trans('cruds.test-car1857120497.fields.test') }}        <input type="text"
               id="7"
               name="testCar1857120497.test"
               class="form-control"
               placeholder="test"
               wire:model.defer="testCar1857120497.test"
        >
        <span class="error-message">
            {{$errors->first('testCar1857120497.test')}}        </span>
    </label>
</div>
