<div class="form-group">
    <label for="7">
        {{ trans('cruds.test-car738787120.fields.test') }}        <input type="number"
               id="7"
               name="testCar738787120.test"
               class="form-control"
               placeholder="test"
               wire:model.defer="testCar738787120.test"
        >
        <span class="error-message">
            errorMessage
        </span>
    </label>
</div>
