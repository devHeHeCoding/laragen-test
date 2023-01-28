<div class="form-group">
    <label for="7">
        {{ trans('cruds.test-car1018942994.fields.test') }}        <input type="text"
               id="7"
               name="testCar1018942994.test"
               class="form-control"
               placeholder="test"
               wire:model.defer="testCar1018942994.test"
        >
        <span class="error-message">
            errorMessage
        </span>
    </label>
</div>
