<div class="form-group">
    <label for="7">
        {{ trans('cruds.test-car2051683754.fields.test') }}        <input type="number"
               id="7"
               name="testCar2051683754.test"
               class="form-control"
               placeholder="test"
               wire:model.defer="testCar2051683754.test"
        >
        <span class="error-message">
            errorMessage
        </span>
    </label>
</div>
