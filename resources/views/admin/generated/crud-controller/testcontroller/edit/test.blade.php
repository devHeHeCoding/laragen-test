<div class="form-group {{$errors->has('testCar1895561726.test') ? 'error' : ''}}">
    <label for="7">
        {{ trans('cruds.test-car1895561726.fields.test') }}        <input type="number"
               id="7"
               name="testCar1895561726.test"
               class="form-control"
               placeholder="test"
               wire:model.defer="testCar1895561726.test"
        >
        <span class="error-message">
            {{$errors->first('testCar1895561726.test')}}        </span>
    </label>
</div>
