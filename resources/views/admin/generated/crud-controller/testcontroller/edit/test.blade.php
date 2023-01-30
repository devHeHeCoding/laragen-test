<div class="form-group {{$errors->has('testCar660723101.test') ? 'error' : ''}}">
    <label for="7">
        {{ trans('cruds.test-car660723101.fields.test') }}        <input type="number"
               id="7"
               name="testCar660723101.test"
               class="form-control"
               placeholder="test"
               wire:model.defer="testCar660723101.test"
        >
        <span class="error-message">
            {{$errors->first('testCar660723101.test')}}        </span>
    </label>
</div>
