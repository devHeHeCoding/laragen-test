<div class="form-group {{$errors->has('testCar1572913987.test') ? 'error' : ''}}">
    <label for="7">
        {{ trans('cruds.test-car1572913987.fields.test') }}        <input type="text"
               id="7"
               name="testCar1572913987.test"
               class="form-control"
               placeholder="test"
               wire:model.defer="testCar1572913987.test"
        >
        <span class="error-message">
            {{$errors->first('testCar1572913987.test')}}        </span>
    </label>
</div>
