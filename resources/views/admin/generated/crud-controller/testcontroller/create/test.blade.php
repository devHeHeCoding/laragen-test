<div class="form-group {{$errors->has('testCar730684024.test') ? 'error' : ''}}">
    <label for="7">
        {{ trans('cruds.test-car730684024.fields.test') }}        <input type="text"
               id="7"
               name="testCar730684024.test"
               class="form-control"
               placeholder="test"
               wire:model.defer="testCar730684024.test"
        >
        <span class="error-message">
            {{$errors->first('testCar730684024.test')}}        </span>
    </label>
</div>
