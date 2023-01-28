<div class="form-group">
    <label for="7">
        {{ trans('cruds.test-car2025907584.fields.test') }}        <input type="number"
               id="7"
               name="testCar2025907584.test"
               class="form-control"
               placeholder="test"
               wire:model.defer="testCar2025907584.test"
        >
        <span class="error-message">
            errorMessage
        </span>
    </label>
</div>
