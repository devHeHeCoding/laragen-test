<div class="form-group {{$errors->has('testCar561906651.test') ? 'error' : ''}}">
    <label for="7">
        {{ trans('cruds.test-car561906651.fields.test') }}        <input type="number"
               id="7"
               name="testCar561906651.test"
               class="form-control"
               placeholder="test"
               wire:model.defer="testCar561906651.test"
        >
        <span class="error-message">
            {{$errors->first('testCar561906651.test')}}        </span>
    </label>
</div>
