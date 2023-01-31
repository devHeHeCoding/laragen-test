<div class="form-group">
    <label for="7">
        {{ trans('cruds.test-car1230195362.fields.test') }}        <input type="number"
               id="7"
               name="testCar1230195362.test"
               class="form-control"
               placeholder="test"
               wire:model.defer="testCar1230195362.test"
        >
        <span class="error-message">
            errorMessage
        </span>
    </label>
</div>
