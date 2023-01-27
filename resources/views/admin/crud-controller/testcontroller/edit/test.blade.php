<div class="form-group">
    <label for="7">
        {{ trans('cruds.test-car436456490.fields.test') }}        <input type="number"
               id="7"
               name="testCar436456490.test"
               class="form-control"
               placeholder="test"
               wire:model.defer="testCar436456490.test"
        >
        <span class="error-message">
            errorMessage
        </span>
    </label>
</div>
