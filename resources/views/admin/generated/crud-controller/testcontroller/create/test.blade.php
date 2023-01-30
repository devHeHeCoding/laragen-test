<div class="form-group">
    <label for="7">
        {{ trans('cruds.test-car2125066814.fields.test') }}        <input type="text"
               id="7"
               name="testCar2125066814.test"
               class="form-control"
               placeholder="test"
               wire:model.defer="testCar2125066814.test"
        >
        <span class="error-message">
            errorMessage
        </span>
    </label>
</div>
