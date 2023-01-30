<div class="form-group">
    <label for="7">
        {{ trans('cruds.test-car1877131006.fields.test') }}        <input type="text"
               id="7"
               name="testCar1877131006.test"
               class="form-control"
               placeholder="test"
               wire:model.defer="testCar1877131006.test"
        >
        <span class="error-message">
            errorMessage
        </span>
    </label>
</div>
