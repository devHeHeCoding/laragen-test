<div class="form-group {{$errors->has('testCar527784445.test') ? 'error' : ''}}">
    <label for="7">
        {{ trans('cruds.test-car527784445.fields.test') }}        <input type="number"
               id="7"
               name="testCar527784445.test"
               class="form-control"
               placeholder="test"
               wire:model.defer="testCar527784445.test"
        >
        <span class="error-message">
            {{$errors->first('testCar527784445.test')}}        </span>
    </label>
</div>
