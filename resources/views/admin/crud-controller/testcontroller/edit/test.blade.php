<div class="form-group">
    <label for="7">
        {{ trans('cruds.test-car1798475003.fields.test') }}        <input type="number"
               id="7"
               name="testCar1798475003.test"
               class="form-control"
               placeholder="test"
               wire:model.defer="testCar1798475003.test"
        >
        <span class="error-message">
            errorMessage
        </span>
    </label>
</div>
