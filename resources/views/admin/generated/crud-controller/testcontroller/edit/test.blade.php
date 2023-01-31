<div class="form-group">
    <label for="7">
        {{ trans('cruds.test-car2116097343.fields.test') }}        <input type="number"
               id="7"
               name="testCar2116097343.test"
               class="form-control"
               placeholder="test"
               wire:model.defer="testCar2116097343.test"
        >
        <span class="error-message">
            errorMessage
        </span>
    </label>
</div>
