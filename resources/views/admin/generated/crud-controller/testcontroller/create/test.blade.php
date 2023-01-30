<div class="form-group">
    <label for="7">
        {{ trans('cruds.test-car898297423.fields.test') }}        <input type="text"
               id="7"
               name="testCar898297423.test"
               class="form-control"
               placeholder="test"
               wire:model.defer="testCar898297423.test"
        >
        <span class="error-message">
            errorMessage
        </span>
    </label>
</div>
