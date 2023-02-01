<div class="form-group {{$errors->has('testCar500896906.test') ? 'error' : ''}}">
    <label for="7">
        {{ trans('cruds.test-car500896906.fields.test') }}        <input type="number"
               id="7"
               name="testCar500896906.test"
               class="form-control"
               placeholder="test"
               wire:model.defer="testCar500896906.test"
        >
        <span class="error-message">
            {{$errors->first('testCar500896906.test')}}        </span>
    </label>
</div>
