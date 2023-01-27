<div class="form-group">
    <label for="7">
        {{ trans('cruds.test-car1633802935.fields.test') }}        <input type="text"
               id="7"
               name="testCar1633802935.test"
               class="form-control"
               placeholder="test"
               wire:model.defer="testCar1633802935.test"
        >
        <span class="error-message">
            errorMessage
        </span>
    </label>
</div>
