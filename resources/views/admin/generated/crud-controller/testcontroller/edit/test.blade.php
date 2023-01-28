<div class="form-group">
    <label for="7">
        {{ trans('cruds.test-car1714286670.fields.test') }}        <input type="number"
               id="7"
               name="testCar1714286670.test"
               class="form-control"
               placeholder="test"
               wire:model.defer="testCar1714286670.test"
        >
        <span class="error-message">
            errorMessage
        </span>
    </label>
</div>
