<div class="form-group {{$errors->has('testCar1898839695.test') ? 'error' : ''}}">
    <label for="7">
        {{ trans('cruds.test-car1898839695.fields.test') }}        <input type="number"
               id="7"
               name="testCar1898839695.test"
               class="form-control"
               placeholder="test"
               wire:model.defer="testCar1898839695.test"
        >
        <span class="error-message">
            {{$errors->first('testCar1898839695.test')}}        </span>
    </label>
</div>
