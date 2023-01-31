<div class="form-group">
    <label for="7">
        {{ trans('cruds.test-car535034191.fields.test') }}        <input type="number"
               id="7"
               name="testCar535034191.test"
               class="form-control"
               placeholder="test"
               wire:model.defer="testCar535034191.test"
        >
        <span class="error-message">
            errorMessage
        </span>
    </label>
</div>
