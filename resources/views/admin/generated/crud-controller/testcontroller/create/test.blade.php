<div class="form-group">
    <label for="7">
        {{ trans('cruds.test-car2012776875.fields.test') }}        <input type="text"
               id="7"
               name="testCar2012776875.test"
               class="form-control"
               placeholder="test"
               wire:model.defer="testCar2012776875.test"
        >
        <span class="error-message">
            errorMessage
        </span>
    </label>
</div>
